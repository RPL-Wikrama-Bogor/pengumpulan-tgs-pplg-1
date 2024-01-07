90000000000000000000000000000090000000<?php
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $ingg = $_POST['ingg'];
    $dpk = $_POST['dpk'];
    $agama = $_POST['agama'];
    $kehadiran = $_POST['kehadiran'];

    $juara = [];
    for ($i = 0; $i < count($mtk); $i++) {
        $totalNilai = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];
        $rataRata = $totalNilai / 5;

        if ($rataRata >= 95 && $kehadiran[$i] >= 100) {
            $juara[] = "Siswa ke-" . ($i + 1);
        }
    }

    if (count($juara) > 0) {
        echo "Siswa yang menjadi juara kelas:<br>";
        foreach ($juara as $siswa) {
            echo "$siswa<br>";
        }
    } else {
        echo "Tidak ada siswa yang memenuhi syarat juara kelas.";
    }
    ?>