<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Acount;
use Illuminate\Http\Request;

class AcountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $account = Acount::all();
        return view('account.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required',
            'type' => 'required',
        ]);

        Acount::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'type' => $request->type,
            'password' => bcrypt(substr('nama', 0, 3) . substr('email', 0, 3)),
            
        ]);

        // atau jika seluruh data input akan dimasukkan langsung ke db bisa dengan perintah Akun::create($request->all());

        return redirect()->back()->with('success', 'Berhasil menambahkan data Akun!');
    
    }

    /**
     * Display the specified resource.
     */
    public function kelola(Acount $acount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $account = Acount::find($id);

        return view('account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'nama' => 'required|min:3',
                'email' => 'required',
                'type' => 'required'
            ]);

            Acount::where('id', $id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'type' => $request->type,
                'password' => bcrypt($request->password),
            ]);


            return redirect()->route('account.home')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Acount::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only(['email', 'password']);
        if (Auth::attempt($user)) {
            return redirect()->route('home.page');
        } else {
            return redirect()->back()->with('failed', 'Proses login gagal, silahkan coba kembali dengan data yang benar');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Anda telah berhasil logout');
    }
}