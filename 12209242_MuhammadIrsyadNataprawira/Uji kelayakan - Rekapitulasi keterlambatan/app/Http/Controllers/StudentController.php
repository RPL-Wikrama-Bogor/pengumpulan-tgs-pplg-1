<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::with('rayon', 'rombel')->get();
        return view('pages.admin.siswa.index', compact('student'));
    }

    public function indexPs()
    {
        $rayon = Rayon::where('user_id', Auth::user()->id)->first();
        $student = Student::with('rayon', 'rombel')->where('rayon_id', $rayon->id)->get();
        return view('pages.admin.siswa.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::with('rombel', 'rayon')->get();
        $rombel = Rombel::all();
        $rayon = Rayon::all();
        return view('pages.admin.siswa.create', compact('student', 'rombel', 'rayon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('student.home')->with('success', 'Data Siswa Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, $id)
    {
        $students = Student::with('rayon', 'rombel')->find($id);
        $rombel = Rombel::all();
        $rayon = Rayon::all();
        return view('pages.admin.siswa.edit', compact('students', 'rombel', 'rayon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rombel_id' => 'required|numeric',
            'rayon_id' => 'required|numeric'
        ]);

        Student::where('id', $id)->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'rombel_id' => $request->rombel_id,
            'rayon_id' => $request->rayon_id
        ]);

        return redirect()->route('student.home')->with('success', 'Data Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student, $id)
    {
        Student::where('id', $id)->delete();

        return redirect()->route('student.home')->with('success', 'Berhasil Menghapus Data');
    }
}
