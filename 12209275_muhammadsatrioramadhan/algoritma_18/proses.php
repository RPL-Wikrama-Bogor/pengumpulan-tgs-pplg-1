<!DOCTYPE html>
<html>

<head>
    <title>Hasil Pencarian Juara Kelas</title>
</head>

<body>
    <h1>Hasil Pencarian Juara Kelas</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $juara_kelas = "Tidak ada";
        $persyaratan_nilai = 475;
        $persyaratan_hadir = 15;
        $persyaratan_mata_pelajaran = 5;
        $persyaratan_total_nilai = $persyaratan_nilai * $persyaratan_mata_pelajaran;

        for ($i = 1; $i <= 15; $i++) {
            $nama_siswa = $_POST["nama_siswa_$i"];
            $nilai_mtk = $_POST["nilai_mtk_$i"];
            $nilai_indo = $_POST["nilai_indo_$i"];
            $nilai_ingg = $_POST["nilai_ingg_$i"];
            $nilai_dpk = $_POST["nilai_dpk_$i"];
            $nilai_agama = $_POST["nilai_agama_$i"];
            $kehadiran = $_POST["kehadiran_$i"];
            $total_nilai = $nilai_mtk + $nilai_indo + $nilai_ingg + $nilai_dpk + $nilai_agama;

            if ($total_nilai >= $persyaratan_total_nilai && $kehadiran == $persyaratan_hadir) {
                $juara_kelas = $nama_siswa;
                break;
            }
        }

        if ($juara_kelas == "Tidak ada") {
            echo "Tidak ada siswa yang memenuhi syarat sebagai juara kelas.";
        } else {
            echo "Juara kelas adalah $juara_kelas.";
        }
    }
    ?>
</body>

</html>