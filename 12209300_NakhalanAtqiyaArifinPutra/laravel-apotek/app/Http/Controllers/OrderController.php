<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use PDF;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ordersQuery = Order::with('user')->orderBy('created_at', 'desc');

        // Check if a filter date is provided
        if ($request->has('filterDate')) {
            // Parse the filter date and format it to match the database date format
            $filterDate = Carbon::parse($request->input('filterDate'))->format('Y-m-d');

            // Add a whereDate clause to the query to filter orders based on the selected date
            $ordersQuery->whereDate('created_at', $filterDate);
        }

        // Retrieve paginated orders
        $orders = $ordersQuery->simplePaginate(10);

        return view("order.kasir.index", compact("orders"));
    }

    public function adminIndex(Request $request)
    {
        $ordersQuery = Order::with('user')->orderBy('created_at', 'desc');

        // Add any additional filters or conditions specific to the admin
        // For example, you can filter by a different column for admin

        // Check if a filter date is provided
        if ($request->has('filterDate')) {
            // Parse the filter date and format it to match the database date format
            $filterDate = Carbon::parse($request->input('filterDate'))->format('Y-m-d');

            // Add a whereDate clause to the query to filter orders based on the selected date
            $ordersQuery->whereDate('created_at', $filterDate);
        }

        // Additional admin-specific conditions or filters can be added here

        // Retrieve paginated orders
        $orders = $ordersQuery->simplePaginate(10);

        return view("order.admin.index", compact("orders"));
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
        //mencari jumlah item yang sama pada array, struknya :
        //["item" => "jumlah"]
        $arrayDistinct = array_count_values($request->medicines);
        //menyiapkan array kosong untuk menampung format array baru
        $arrayAssocMedicines = [];
        //looping hasil penghitungan item distinct (duplikat)
        //key akan berupa value dari input medicines(id), item array berupa jumlah penghitungan item duplikat
        foreach($arrayDistinct as $id => $count){
            //mencari data obat berdasarkan id (obat yang terpilih)
            $medicine = Medicine::where('id', $id)->first();
            //ambil bagian column price dari hasil pencarian lalu kalikan dengan jumlah item duplikat sehingga akan menghasilkan total harga dari
            //pembelian obat tersebut
            $subPrice = $medicine['price'] * $count;
            //struktur value column medicines menjadi multidimensi dengan dimensi kedua berbentuk array associative dengan key "id", "name_medicine", "qty,
            //"price"
            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicine['name'],
                "qty" => $count,
                "price" => $medicine['price'],
                "sub_price" => $subPrice,
            ];
            //masukan struktur array tersebut ke array kosong yang disediakan sebelumnya
            array_push($arrayAssocMedicines, $arrayItem);
    }
    //total harga pembelian dari obat-obat yang terpilih
    $totalPrice = 0;
    //looping format array medicines baru
    foreach($arrayAssocMedicines as $item){
        //total harga pembelian ditambahkan dari keseluruhan sub_price data medicines
        $totalPrice += (int)$item['sub_price'];
    }
    //harga beli ditambah 10% ppn
    $priceWithPPN = $totalPrice + ($totalPrice * 0.01);
    //tambah data ke database
    $proses = Order::create([
        //data user_id diambil dari id akun kasir yang sedang login
        'user_id' => Auth::user()->id,
        'medicines' => $arrayAssocMedicines,
        'name_customer' => $request->name_customer,
        'total_price' => $priceWithPPN,
    ]);

    if($proses) {
        //jika proses tambah data berhasil, ambil data order yang dibuat oleh kasir yang sedang login (where), dengan tanggal yang paling terbaru
        //(orderBy), ambil hanya satu data (first)
        $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        //kirim dara order yang diambil tadi, bagian column id sebagai parameter path dari route print
        return redirect()->route('kasir.order.print', $order['id']);
    }else{
        return redirect()->back()->with('failed', 'Gagal membuat data pembelian. Silahkan coba kembali dengan data yang sesuai');
    };

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

    public function downloadPDF($id){
        //ambil data yang diperlukan, dan pastikan data berformat array
        $order = Order::find($id)->toArray();
        //mengirim inisial variable dari data yang akan digunakan pada layout pdf
        view()->share('order', $order);
        //panggil blade yang akan di download
        $pdf = PDF::loadView('order.kasir.download-pdf', $order);
        //kembalikan atau hasilkan bentuk pdf dengan nama file tertentu
        return $pdf->download('receipt.pdf');
    }  
    
    public function data(){
        $orders = Order::with('user')->simplePaginate(5);
        return view("order.admin.index", compact("orders"));
    }

    public function exportExcel(){
        $file_name = 'data_pembelian'.'.xlsx';
        return Excel::download(new OrdersExport, $file_name);
    }
}
