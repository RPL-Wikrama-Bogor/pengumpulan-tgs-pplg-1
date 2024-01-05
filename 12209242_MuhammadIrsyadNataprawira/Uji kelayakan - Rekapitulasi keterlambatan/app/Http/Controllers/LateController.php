<?php

namespace App\Http\Controllers;
use App\Exports\LatesExport;
use App\Models\Late;
use App\Models\Rayon;
use App\Models\Student;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use PDF;
use Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LateController extends Controller
{

    public function export()
    {
        if (Auth::user()->role == 'admin') {
            return Excel::download(new \App\Exports\LatesExport, 'data_keterlambatan.xlsx');
        } else {
            $rayon = Rayon::where('user_id', Auth::user()->id)->first();
            return Excel::download(new \App\Exports\LatesExport, 'data_keterlambatan '.$rayon->rayon.'.xlsx');
        }

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lates = Late::with('student')->get();
        $student = Student::all();
        
        return view('pages.admin.keterlambatan.index', compact('lates', 'student'));
    }
    
    public function indexPs() {
        $rayon = Rayon::where('user_id', Auth::user()->id)->first();
        $student = Student::where('rayon_id', $rayon->id)->get();
        // dd($student);
        $lates = Late::where('student_id', $rayon->id)->get();

        return view('pages.admin.keterlambatan.index', compact('student', 'lates'));
    }

    public function rekapPs() {
        $rayon = Rayon::where('user_id', Auth::user()->id)->first();
        $rekaps = Late::with('student')
            ->select('student_id', DB::raw('count(*) as total'))
            ->groupBy('student_id')
            ->where('student_id', $rayon->id)
            ->get();

        return view('pages.admin.keterlambatan.rekap', compact('rekaps'));
    }

    public function rekap()
    {
        $rekap = Late::with('student')
            ->select('student_id', DB::raw('count(*) as total'))
            ->groupBy('student_id')
            ->get();
        // dd($rekap);

        return view('pages.admin.keterlambatan.rekap', compact('rekap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lates = Late::with('student')->get();
        $student = Student::all();
        return view('pages.admin.keterlambatan.create', compact('lates', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'information' => 'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_time_late' => 'required',
        ]);

        $imageName = time() . '.' . $request->bukti->getClientOriginalExtension();
        $request->bukti->move(public_path('images'), $imageName);

        $late = new Late([
            'student_id' => $request->get('student_id'),
            'information' => $request->get('information'),
            'bukti' => $imageName,
            'date_time_late' => $request->get('date_time_late'),
        ]);

        $late->save();

        return redirect()->route('late.home')->with('success', 'Berhasil menambah data Keterlambatan');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $students = Student::findOrFail($id);
        $lates = Late::with('student')->where('student_id', $id)->get();
        
        return view('pages.admin.keterlambatan.show', compact('students', 'lates'));
    }
    
    /**
     * Print out the pdf keterlambatan
     */
    public function print(Late $lates, $id) 
    {
        $data = Student::with('rayon', 'rombel')->findOrFail($id);
        // dd($data);
        return view('pages.admin.keterlambatan.print', compact('data'));
    } 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Late $late, $id)
    {
        $lates = Late::with('student')->find($id);
        $students = Student::all();

        return view('pages.admin.keterlambatan.edit', compact('lates', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'information' => 'required',
            'bukti' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_time_late' => 'required',
        ]);

        $late = Late::findOrFail($id);

        $late->student_id = $request->get('student_id');
        $late->information = $request->get('information');
        $late->date_time_late = $request->get('date_time_late');

        if ($request->hasFile('bukti')) {
            $imageName = time() . '.' . $request->bukti->getClientOriginalExtension();
            $request->bukti->move(public_path('images'), $imageName);

            if ($late->bukti) {
                $oldImagePath = public_path('images/' . $late->bukti);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $late->bukti = $imageName;
        }

        $late->save();

        return redirect()->route('late.home')->with('success', 'Berhasil memperbarui data Keterlambatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Late $late, $id)
    {
        Late::where('id', $id)->delete();

        return redirect()->route('late.home')->with('success', 'Berhasil Menghapus Data');
    }

    public function downloadPDF($id) {
        try {
            $data = Student::with('rayon', 'rombel')->findOrFail($id)->toArray();
    
            view()->share('data', $data);
    
            $pdf = PDF::loadView('pages.admin.keterlambatan.downloadpdf', $data);
    
            return $pdf->download('Surat Pernyataan.pdf');
            
            return redirect()->route('late.rekap')->with('printed', 'PDF BERHASIL DI CETAK!');
        } finally {
            \Log::info('PDF berhasil diunduh untuk mahasiswa dengan ID ' . $id);
        }
    }
    
    
}
