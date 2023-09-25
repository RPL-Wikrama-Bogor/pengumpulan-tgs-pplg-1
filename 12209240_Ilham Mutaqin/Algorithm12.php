<?php
$hh;
$mm;
$ss;


?>



<!DOCTYPE html>
<html>
<head>
    <title>Menambah 1 Detik pada Waktu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
    <h2>Menambah 1 Detik pada Waktu</h2>

    <form method="post">
        <table>
        
        <label for="jam">Jam:</label>
        <input type="number" name="jam" required>
        <label for="menit">Menit:</label>
        <input type="number" name="menit" required>
        <label for="detik">Detik:</label>
        <input type="number" name="detik" required>
        <input type="submit" name="submit" value="Tambah 1 Detik">
        </tr>
     </table>
    </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $hh = $_POST['jam'];
        $mm = $_POST['menit'];
        $ss = $_POST['detik'];

        $ss += 1;
        if ($ss >= 60) {
            $mm += 1;
            $ss = $ss - 60;
            if ($mm >= 60) {
                $ss += 1;
                $mm = $mm - 60;
                if ($hh >= 24) {
                    $hh = $hh - 24;
                }
            }
        }

        echo "<style> Waktu setelah ditambah 1 detik:</style> " . sprintf("%02d:%02d:%02d", $hh, $mm, $ss);
    }
    ?>
</body>
</html>
