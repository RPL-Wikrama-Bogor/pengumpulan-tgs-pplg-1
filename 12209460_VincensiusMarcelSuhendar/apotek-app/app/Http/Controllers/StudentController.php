<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // displays html layout in resources-views
        return view('student.create');
    }
    public function home()
    {
        // displays html layout in resources-views
        return view('student.home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
        ]);

        // $name = $_POST["name"];
        // $email = $_POST["email"];
        // $psswd = PASSWORD_HASH($name . $email, PASSWORD_DEFAULT);

        student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt(substr('name', 0, 3) . substr('email', 0, 3)),
            'role' => $request->role,
        ]);

        // if all data = student::create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambahkan data akun!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required',
            'role' => 'required',
        ]);

        // $password = $request->password;
        // function setPasswordAttribute($psswd)
        //     {
        // if (trim($password) != "") {
        //     $request->password = PASSWORD_HASH($password, PASSWORD_DEFAULT);
        // };
        // $password = $_POST["password"];
        if ($request->password == '') {
            student::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);
         }
         else {
             student::where('id', $id)->update([
                 'name' => $request->name,
                 'email' => $request->email,
                 'role' => $request->role,
                 'password' => Hash::make($request->password),
             ]);
         }

        return redirect()->route('student.home')->with('success', 'Berhasil mengubah data akun!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        student::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil menghapus data akun!');
    }
    public function role()
    {
        $students = student::orderBy('role', 'ASC')->get();

        return view('student.role', compact('students'));
    }
    public function roleEdit($id)
    {
        $student = student::find($id);

        return response()->json($student);
    }
    public function loginAuth(Request $request){
        $request->validate([
            'email'=> 'required|email:dns',
            'password'=> 'required',
        ]);
        $student = $request->only(['email','password']);
        if (Auth::attempt($student)) {
            return redirect()->route('home.page');
        } else {
            return redirect()->back()->with('failed','Login gagal. Make sure your password and username is correct.');
        }
    }
    public function AlreadyAccessed(Request $request){
            return redirect()->back()->with('AlreadyAccessed','Sudah login!');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login')->with('logout','You have logged out.');
    }
}
