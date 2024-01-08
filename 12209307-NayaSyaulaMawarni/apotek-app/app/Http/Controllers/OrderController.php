<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil seluruh data pada table orders dengan pagination per halaman 10 data serta mengambil hasil relasi function bernama user pada model order
        $orders = Order::with('user')->simplePaginate(10);
        return view("order.kasir.index", compact("orders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicines = Medicine::all();
        return view("order.kasir.create", compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required',
            'medicines' => 'required',
        ]);
        // mencari jumlah item yang sama pada array, strukturnya :
        // [ "item" => "jumlah" ]
        $arrayDistinct = array_count_values($request->medicines);
        // menyiapkan array kosong unru menampung format array baru
        $arrayAssocMedicines = [];
        //looping hasil penghitungan item distinct (duplikat)
        // key akan berupa value dr input medicines id. item array berapa jumlah penghitungan item duplikat
        foreach ($arrayDistinct as $id => $count) {
            $medicine = Medicine::where('id', $id)->first();
            //ambil bagian column price dr hasil pencarian lalu kalikan dengan jumlah item duplikat sehingga akan menghasilkan total harga dr pembelian obat tersebut
            $subPrice = $medicine['price'] * $count;
            //struktur value column medicines menjadi multidimensi dengan dimensi kedua berbnetuk array assoc dengan key "id", "name_medicine", "qyt", "price"
            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicine['name'],
                "qyt" => $count,
                "price" => $medicine['price'],
                "sub_price" => $subPrice,
            ];
            // masukan struktur array tersebut ke array kosong yang di sediakan sebelumnya
            array_push($arrayAssocMedicines, $arrayItem);
        }
        // total harga pembelian dari obat obat yg dipilih
        $totalPrice = 0;
        // looping format array medicines baru 
        foreach ($arrayAssocMedicines as $item) {
            // total harga pembelian ditambahkan dri keseluruhan sub price data medicines
            $totalPrice += (int)$item['sub_price'];
        }
        //harga beli ditambah 10% ppn
        $priceWithPPN = $totalPrice + ($totalPrice * 0.01);
        //tambah data ke data base
        $proses = Order::create([
            // data user_id diambil dari id akun kasir yang sedang login
            'user_id' => Auth::user()->id,
            'medicines' => $arrayAssocMedicines,
            'name_customer' => $request->name_customer,
            'total_price' => $priceWithPPN,
        ]);

        if ($proses) {
            // jika proses tambah data berhasil, ambil data order yg dibuat oleh kasir yg sedang login (where), dengan tanggal paling terbaru (orderBy), ambil hanya satu data (first)
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            //kirim data order yang diambil td, bagian column id sebagai parameter path route print
            return redirect()->route('kasir.order.print', $order['id']);
        } else {
            //jika tidak berhasil maka di arahkan kembali ke halaman form dengan pesan pemberitahuan
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian. Silahkan coba kembali dengan data yang sesuai!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.kasir.print', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function downloadPDF($id)
    {
        // ambil data yang di perlukan, dan pastikan data berformat array
        $order = Order::find($id)->toArray();
        // mengirim inisial variable dari data yang akan digunakan pada layout pdf
        view()->share('order', $order);
        // panggil blade yang akan di download
        $pdf = PDF::loadView('order.kasir.download-pdf', $order);
        // kembalikan atau hasilkan bentuk pdf dengan nama file tertentu
        return $pdf->download('receipt.pdf');
    }

    public function data()
    {
        // with : mengambil hasil relasi dari pk dan fk nya. valuenya == nama func relasi hasnamy/ belongsto yg ada di modelnya
        $orders = Order::with('user')->simplePaginate(5);
        return view("order.admin.index", compact('orders'));
    }

    public function exportExcel()
    {
        $file_name = 'data_pembelian' . '.xlsx';

        return Excel::download(new OrdersExport, $file_name);
    }

    public function search(Request $request)
    {
      $searchDate = $request->get('search');
      $orders = Order::whereDate('created_at', $searchDate)->simplePaginate(5);
      return view('order.kasir.index', compact('orders'));

    }
}
