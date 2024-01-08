<?php

// app/Exports/LatesExport.php
namespace App\Exports;

use App\Models\Late;
use App\Models\Rayon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\DB;


class LatesExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        if (Auth::user()->role == 'admin') {
            return Late::with('student')
                ->select('student_id', DB::raw('count(*) as total'))
                ->groupBy('student_id')
                ->get();
        } else {
            $rayon = Rayon::where('user_id', Auth::user()->id)->first();
            return Late::with('student')
                ->select('student_id', DB::raw('count(*) as total'))
                ->groupBy('student_id')
                ->where('student_id', $rayon->id)
                ->get();
        }
    }

    public function headings(): array
    {
        return [
            'NIS',
            'Nama',
            'Rombel',
            'Rayon',
            'Total Keterlambatan'
        ];
    }

    public function map($item): array
    {
        return [
            $item->student->nis,
            $item->student->name,
            $item->student->rombel->rombel,
            $item->student->rayon->rayon,
            $item->total,
        ];
    }
}
