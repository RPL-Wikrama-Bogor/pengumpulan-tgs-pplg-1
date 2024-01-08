<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('pages.admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'role' => 'required',
        ]);

        $namePrefix = $request->name;
        $emailPrefix = $request->email;
        $password = substr($emailPrefix, 0, 3) . substr($namePrefix, 0, 3);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $password
        ]);

        return redirect()->route('user.home')->with('success', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'role' => 'required',
        ]);

        $newData = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        if ($request->filled('password')) {
            $newData['password'] = bcrypt($request->password);
        };


        User::where('id', $id)->update($newData);

        return redirect()->route('user.home')->with('success', 'Data user berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.home')->with('success', 'Berhasil Menghapus Data');
    }

    public function dashboardPs()
    {
        $rayon = Rayon::where('user_id', Auth::user()->id)->first();
        $student = Student::where('rayon_id', $rayon->id)->count();
        $today = Carbon::now()->format('Y-m-d');
        $latenessCount = DB::table('lates')
            ->where('student_id', $rayon->id)
            ->whereDate('created_at', '=', $today)
            ->count();

        return view('pages.pembimbing.home', compact('rayon', 'student', 'latenessCount'));
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = $request->only(['email', 'password']);
        if (Auth::attempt($user)) {
            $role = Auth::user();
            if ($role->role == 'admin') {
                return redirect()->route('home.page');
            }
            if ($role->role == 'ps') {
                return redirect()->route('pemb.ps.home');
            }
        } else {
            return redirect()->back()->with('failed', 'Proses login gagal, silahkan coba lagi dengan data yang benar!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Anda telah berhasil logout!');
    }
}
