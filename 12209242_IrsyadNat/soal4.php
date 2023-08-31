<?php
function hitungGajiBersih($nama, $gajiPokok)
{
    $tunjangan = (20 * $gajiPokok) / 100;
    $pajak = (15 * ($gajiPokok + $tunjangan)) / 100;
    $gajiBersih = $gajiPokok + $tunjangan - $pajak;

    return [
        'nama' => $nama,
        'gajiBersih' => $gajiBersih
    ];
}

$gajiAkhir = ['nama' => '', 'gajiBersih' => ''];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $gajiPokok = $_POST['gajiPokok'];

    $gajiAkhir = hitungGajiBersih($nama, $gajiPokok);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4 - Gaji</title>
    <style>
        html,
        body,
        :root {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            border: 1px solid black;
        }

        .box {
            display: flex;
            flex-direction: column;
            background-color: #444;
            padding: 100px;
            color: white;
            width: 50%;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 12px;
        }


        #button {
            margin-top: 10px;
            border-radius: 10px;
            transition: .1s ease-in-out;
        }

        #button:hover {
            background-color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Menentukan gaji karyawan</h1>
        <div class="box">
            <form action="" method="post">
                <label for="inputInteger">Masukan Nama Karyawan: </label>
                <input type="text" name="nama" placeholder="Nama karyawan..." required>
                <label for="inputInteger">Masukan Gaji karyawan: </label>
                <input type="number" name="gajiPokok" placeholder="Gaji Pokok..." required>
                <input type="submit" value="Tentukan" id="button" name="submit" required>
            </form>

            <?php if ($gajiAkhir['nama'] !== '') : ?>
                <p>Hasil perhitungan gaji untuk <?php echo $gajiAkhir['nama']; ?>:</p>
                <p>Gaji Bersih: Rp <?php echo number_format($gajiAkhir['gajiBersih'],2,',','.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>