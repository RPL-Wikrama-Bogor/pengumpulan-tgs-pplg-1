<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emailPart = substr($request->email, 0, 3);

        // Ambil 3 karakter pertama dari nama
        $namePart = substr($request->name, 0, 3);

        // Gabungkan kedua bagian untuk membentuk kata sandi
        $password = strtolower($emailPart . $namePart . rand(100, 999));

        // Enkripsi kata sandi menggunakan bcrypt
        $hashedPassword = Hash::make($password);

        // Buat pengguna baru

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns',
            'role' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $request->role
        ]);


        return redirect()->route('users.home')->with('success', 'Berhasil menambahkan Users!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        // or $medicine = Medicine::where('id',$id)->first()

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns',
            'role' => 'required',
            'password' => 'required'
        ]);


        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        if ($request->filled('password')) {
            // Jika ya, hash password baru
            $hashedPassword = Hash::make($request->password);
            $userData['password'] = $hashedPassword;
        }
    
        User::where('id', $id)->update($userData);

        return redirect()->route('users.home')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { 
        User::where('id',$id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil mengahpus data');
    }

    public function loginAuth(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $user = $request->only(['email', 'password']);
        if(Auth::attempt($user)){
            return redirect()->route('home.page');
        }else{
            return redirect()->back()->with('failed', 'Proses login gagal, silahkan coba kembali dengan data yang benar!');
        }

    }

    public function homePage()
{
    return view('home');
}

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Anda telah logout!');
    }


    
}
