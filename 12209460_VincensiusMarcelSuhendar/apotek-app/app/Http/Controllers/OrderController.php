<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;
use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view("order.kasir.index", compact("orders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicines = Medicine::all();
        return view("order.kasir.create", compact("medicines"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required',
            'medicines' => 'required',
        ]);
        // mencari jumlah item yang sama pada array, strukturnya :
        // ["item" => "jumlah" ]
        $arrayDistinct = array_count_values($request->medicines);
        // menyiapkan array kosong untuk menampung format array baru
        $arrayAssocMedicines = [];
        // looping hasil penghitungan item distinct (duplikat)
        // key akan berupa value dr input medicines (id), item array berupa jumlah penghitungan item duplikat
        foreach ($arrayDistinct as $id => $count) {
            // mencari data obat berdasarkan id (obat yg dipilih)
            $medicine = Medicine::where('id', $id)->first();
            // ambil bagian column price dr hasil pencarian lalu kalikan dengan jumlah item duplikat sehingga akan menghasilkan total harga dr pembelian obat tersebut
            $subPrice = $medicine['price'] * $count;
            // struktur value column medicines menjadi multidimensi dengan dimensi kedua berbentuk array assoc dengan key "id", "name_medicine", "qty, "price"
            $arrayItem =
                [
                    "id" => $id,
                    "name_medicine" => $medicine['name'],
                    "qty" => $count,
                    "price" => $medicine['price'],
                    "sub_price" => $subPrice,
                ];
            // masukkan struktur array tersebut ke array kosong yg disediakan sebelumnya
            array_push($arrayAssocMedicines, $arrayItem);
        }

        // total harga pembelian dari obat-obat yg dipilih
        $totalPrice = 0;
        // looping format array medicines baru
        foreach ($arrayAssocMedicines as $item) {
            // total harga pembelian ditambahkan dr keseluruhan sub_price data medicines
            $totalPrice += (int)$item['sub_price'];
        }
        // harga beli ditambah 10% ppn
        $priceWithPPN = $totalPrice + ($totalPrice * 0.01);
        // tambah data ke database
        $proses = Order::create([
            // data user_id diambil dari id akun kasir yg sedang login
            'user_id' => Auth::user()->id,
            'medicines' => $arrayAssocMedicines,
            'name_costumer' => $request->name_customer,
            'total_price' => $priceWithPPN,
        ]);
        if ($proses) {
            // jika proses tambah data berhasil, ambil data order yg dibuat oleh kasir yg sedang login (where),
            // dengan tanggal paling terbaru (orderBy), ambil hanya satu data (first)
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            // kirim data order yg diambil td, bagian column id sebagai parameter path dari route print
            return redirect()->route('kasir.order.print', $order['id']);
        } else {
            // jika tidak berhasil, maka diarahkan kembali ke halaman form dengan pesan pemberitahuan
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian. Silahkan coba kembali dengan data yang sesuai!');
        }
    }
    public function show($id){
        $order = Order::find($id);
        return view('order.kasir.print', compact('order'));
    }
    public function downloadPDF($id){
        $order = Order::find($id)->toArray();
        view()->share('order', $order);
        $pdf = Pdf::loadView('order.kasir.download-pdf', $order);
        return $pdf->download('receipt.pdf');
    }
    public function data(){
        $orders = Order::with('user')->simplePaginate(5);
        return view("order.admin.index", compact('orders'));
    }
    public function exportExcel(){
        $file_name = 'data_pembelian'.'.xlsx';

        return Excel::download(new OrdersExport, $file_name);
    }
}
