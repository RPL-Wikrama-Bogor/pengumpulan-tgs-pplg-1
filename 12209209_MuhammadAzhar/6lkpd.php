<?php
// Inisialisasi variabel untuk nilai tertinggi dan jumlah siswa yang mendapat nilai tertinggi
$nilai_tertinggi = 0;
$jumlah_siswa_tertinggi = 0;

// Mengulangi proses membaca nilai dan memproses nilai tertinggi
for ($i = 1; $i <= 10; $i++) {
    echo "Masukkan nilai ujian siswa ke-$i: ";
    $nilai = floatval(fgets(STDIN)); // Membaca input nilai

    // Memeriksa apakah nilai lebih tinggi dari nilai_tertinggi
    if ($nilai > $nilai_tertinggi) {
        $nilai_tertinggi = $nilai;
        $jumlah_siswa_tertinggi = 1;
    } elseif ($nilai == $nilai_tertinggi) {
        $jumlah_siswa_tertinggi++;
    }
}

// Menampilkan nilai tertinggi dan jumlah siswa yang mendapatnya
echo "Nilai tertinggi yang didapat siswa: " . $nilai_tertinggi . "\n";
echo "Jumlah siswa yang mendapat nilai tertinggi: " . $jumlah_siswa_tertinggi . "\n";
?>