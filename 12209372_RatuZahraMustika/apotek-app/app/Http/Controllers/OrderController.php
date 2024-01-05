<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("order.kasir.index", compact("orders"));
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
        ]);
        //mencari jumlah item yang sama padaa array, strukturnya:
        // ["item => "jumlah ]
        $arrayDistinct = array_count_values($request->medicines);
        //menyiapkan array kosong untuk menampung format array baru
        $arrayAssocMedicines = [];
        //looping hasil perhitungan item distinct (duplikat)
        //key akan berupa value dari input medicines (id), item array berupa jumlah perhitungan item duplikat
        foreach ($arrayDistinct as $id => $count) {
            //mencari data obat berdasarkan, id (oabt yang dipilih)
            $medicine = Medicine::where('id', $id)->first();
            //ambil bagian coloumn pada price dari hasil pencarian lalu kalikan dengan jumlah item duplikat sehingga akan menghasilkan total harga dari pembelian tsbt
            $subPrice = $medicine['price'] * $count;
            //strukturnya value colomn medicines menjadi multidimensi kedua berbentuk array assoc dengan key "id", "name_medicine","qty","price"
            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicine['name'],
                "qty" => $count,
                "price" => $medicine['price'],
                "sub_price" => $subPrice,
            ];

            //masukan struktur array terssebut ke array kosong yang disediakan sebelumnya
            array_push($arrayAssocMedicines, $arrayItem);
        }
        //total harga pembelian dari obat obat yang dipilih
        $totalPrice = 0;
        //looping format aarray medicines baru
        foreach ($arrayAssocMedicines as $item) {
            //total harga pembelian ditambahkan dr keseluruhan sub_price data medicines
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

        if ($proses) {
            //jka proses tambah data berhasil, ambil data order yang dibuat oleh kasir yang sedang login (where), dengan tanggal paling terbaru (orderBy), ambil hanya satu data (first)
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            //kirim data order yang diambil td, bagian colomn id sebagai parameter path dari route print
            return redirect()->route('kasir.order.print', $order['id']);
        }else {
            //jika tidak berhasil, maka diarahkan kembali kehalaman form dengan pesan pemberitahuan
            return redirect()->with('failed', 'Gagal membuat data pembelian, silahkan coba kembali dengan data yang sesuai!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
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
}
