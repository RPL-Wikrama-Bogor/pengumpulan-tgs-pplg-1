<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\User;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rayon = Rayon::with('user')->get();

        return view('pages.admin.rayon.index', compact('rayon'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rayon = Rayon::with('user')->get();
        $user = User::all();
        return view('pages.admin.rayon.create', compact('rayon', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rayon' => 'required',
            'user_id' => 'required'
        ]);

        Rayon::create($request->all());

        return redirect()->route('rayon.home')->with('success', 'Data Rayon Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rayon $rayon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rayon $rayon, $id)
    {
        $rayon = Rayon::with('user')->find($id);
        $users = User::all();
        return view('pages.admin.rayon.edit', compact('rayon', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rayon' => 'required',
            'user_id' => 'required'
        ]);

        Rayon::where('id', $id)->update([
            'rayon' => $request->rayon,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('rayon.home')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rayon $rayon, $id)
    {
        $rayon = Rayon::find($id);
        $rayon->delete();

        return redirect()->route('rayon.home')->with('success', 'Berhasil Menghapus Data');
    }
}
