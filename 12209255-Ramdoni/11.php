<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h2>Informasi Pegawai</h2>

<form method="post" action="">
    Masukkan Nomor Pegawai (11 karakter): <input type="text" name="nomorPegawai">
    <input type="submit" name="submit" value="Cari">
</form>

<?php
function month($month) {
    switch ($month) {
        case "01":
            return "JANUARI";
        case "02":
            return "FEBRUARI";
        case "03":
            return "MARET";
        case "04":
            return "APRIL";
        case "05":
            return "MEI";
        case "06":
            return "JUNI";
        case "07":
            return "JULI";
        case "08":
            return "AGUSTUS";
        case "09":
            return "SEPTEMBER";
        case "10":
            return "OKTOBER";
        case "11":
            return "NOVEMBER";
        case "12":
            return "DESEMBER";
        default:
            return "Bulan tidak valid";
    }
}

if (isset($_POST['submit'])) {
    $nomorPegawai = $_POST['nomorPegawai'];

    if (strlen($nomorPegawai) == 11) {
        $golongan = $nomorPegawai[0];
        $date = substr($nomorPegawai, 1, 2);
        $month = substr($nomorPegawai, 3, 2);
        $year = substr($nomorPegawai, 5, 4);
        $nomorUrut = substr($nomorPegawai, 9);

        echo "<br>";
        echo "Nomor Golongan: " . $golongan . "<br>";
        echo "Tanggal Lahir: " . $date . " " . month($month) . " " . $year . "<br>";
        echo "Nomor Urut: " . $nomorUrut;
    } else {
        echo "Nomor Pegawai harus terdiri dari 11 karakter.";
    }
}
?>

</body>
</html>
