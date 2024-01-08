<?php

namespace App\Http\Controllers;

use PDF;
use Excel;
use App\Models\Order;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Exports\OrdersExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Order::query()->with('user');
        
        $date = $request->input('filter'); 
        
        if ($date) {
            $query->whereDate('created_at', '=', $date);
        }

        $orders = $query->simplePaginate(10);

        return view('order.kasir.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines = Medicine::all();
        return view("order.kasir.create", compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required',
            'medicines' => 'required',
        ],
        [
            'name_customer.required' => 'Nama pembeli harus diisi',
            'medicines.required' => 'Obat harus diisi',
        ]);

        // dd($request->medicines); //ambil semua value dari input name=medicines

        $arrayDistinct = array_count_values($request->medicines);//ambil value dan dihitung ada berapa 
        // id 1 => 2, obat dengan id 1 dipilih 2 kali atau item => jumlah 

        //dd($arrayDistinct);

        $arrayAssocMedicines = [];

        foreach ($arrayDistinct as $id => $count) {
            $medicine = Medicine::where('id', $id)->first();
            $subPrice = $medicine->price * $count;
            $arrayItem = [
                'id' => $id,
                'name_medicine' => $medicine->name,
                'qty' => $count,
                'price' => $medicine->price,
                'sub_price' => $subPrice,
            ];

            array_push($arrayAssocMedicines, $arrayItem);
        }

        //dd($arrayAssocMedicines);
        $totalPrice = 0;

        // looping format array medicines baru
        foreach ($arrayAssocMedicines as $item) {
            // total harga pembelian ditambahkan dari keseluruhan sub_price data medicines
            $totalPrice += (int)$item['sub_price'];
        }

        // harga beli ditambah 10% ppn
        $priceEithPPN = $totalPrice + ($totalPrice * 0.01);
        // tambah data ke database
        $proses = Order::create([
            // data user_id diambi; dari id akun kasir yang sedang login
            'user_id' => Auth::user()->id,
            'medicines' => $arrayAssocMedicines,
            'name_customer' => $request->name_customer,
            'total_price' => $priceEithPPN,
        ]);

        if ($proses) {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            return redirect()->route('kasir.order.print', $order['id']);
        } else {
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian. Silahkan coba kembali dengan data yang sesuai!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, $id)
    {
        $order = Order::where('id', $id)->first();

        return view('order.kasir.print', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function downloadPDF($id) {
        // $order = Order::find($id)->toArray();
        // $pdf = PDF::loadView('order.kasir.download-pdf', $order);

        $order = Order::find($id);

        // view()->share('order', $order);
        $pdf = PDF::loadview('order.kasir.download-pdf', compact('order'));

        return $pdf->download('receipt.pdf');
    }

    // public function search(Request $request) {
    //     $date = $request->input('filter');
    //     if ($date) {
    //         $order = Inbox::whereDate('created_at', $date)->get();
    
    //         return view('order.kasir.search', compact('order'));
    //     } else {
    //         $order = Inbox::all();
    //         return view('order.kasir.search', compact('order'));
    //     }

    // }
    // $date = Inbox::whereDate($item->created_at);

    // return view('order.kasir.search', compact('order'));

    public function data() {
        $orders = Order::with('user')->simplePaginate(5);
        return view("order.admin.index", compact('orders'));
    }

    public function exportExcel() {
        $fileName = 'data_pembelian.xlsx';
        return Excel::download(new OrdersExport, $fileName);
    }
}
