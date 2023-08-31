<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $waktu = $_POST["waktu"];
    list($jam, $menit, $detik) = explode(":", $waktu);

    $detik = intval($detik) + 1;
    if ($detik > 59) {
        $detik = 0 . "0";
        $menit = intval($menit) + 1;
        if ($menit > 59) {
            $menit = 0 . "0";
            $jam = intval($jam) + 1;
            if ($jam > 23) {
                $jam = 0 . "0";
            }
        }
    }

    $hasil = $jam . ":" . $menit . ":" . $detik;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Penambahan 1 Detik pada Waktu</title>
</head>

<body>
    <h2>Penambahan 1 Detik pada Waktu</h2>
    <form method="post" action="">
        <label>Masukkan waktu (hh:mm:ss):</label>
        <input type="text" name="waktu" required>
        <button type="submit">Tambah 1 Detik</button>
    </form>

    <?php if (isset($hasil)) : ?>
        <p>Data Waktu: <?php echo $waktu; ?></p>
        <p>Setelah Penambahan 1 detik: <?php echo $hasil; ?></p>
    <?php endif; ?>
</body>

</html>

