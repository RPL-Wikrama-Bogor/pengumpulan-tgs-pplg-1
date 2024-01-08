<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rombel = Rombel::all();

        return view('pages.admin.rombel.index', compact('rombel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.rombel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rombel' => 'required',
        ]);

        Rombel::create([
            'rombel' => $request->rombel
        ]);

        return redirect()->route('rombel.home')->with('success', 'Data Created Succesfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rombel $rombel, $id)
    {
        $rombel = Rombel::find($id);
        return view('pages.admin.rombel.edit', compact('rombel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rombel' => 'required',
        ]);

        Rombel::where('id', $id)->update([
            'rombel' => $request->rombel
        ]);

        return redirect()->route('rombel.home')->with('success', 'Data Rombel Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rombel $rombel, $id)
    {
        $rombel = Rombel::find($id);
        $rombel->delete();

        return redirect()->route('rombel.home')->with('success', 'Berhasil Menghapus Data');
    }
}
