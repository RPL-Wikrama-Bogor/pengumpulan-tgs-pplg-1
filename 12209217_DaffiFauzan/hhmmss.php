<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hhmmss</title>
    <style>
        * {
            font-family: Pangram-ExtraLight;
        }

        @font-face {
            font-family: Pangram-ExtraLight;
            src: url(font/PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Regular.otf);
        }

        body {
            background-image: linear-gradient(blue, white);
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 450px;
            height: 530px;
            margin-top: 50px;
            margin-left: 450px;
            border-radius: 50px;
            background: white;
            border: 1px solid black;
        }

        form .test input {
            width: 330px;
            padding: 15px;
            margin: 15px;
            margin-top: 20px;
            border: 2px solid gray;
            border-radius: 10px;
        }

        .test {
            margin-top: 60px;
            margin-left: 20px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            margin-bottom: 15px;
            margin-top: 17px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 15px;
            width: 85%;
            transition: 0.5s;
        }

        button:hover{
            width: 90%;
            font-size: 20px;
            transition: 0.5s;
        }

        form h1 {
            margin-top: 50px;
            margin-left: 100px;
        }

        .hasil {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            top: 200px;
            right: 50px;
            width: 350px;
            height: 300px;
            background: white;
            border-radius: 20px;
            background: white;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <h1>Inputkan Waktu</h1>
        <div class="test">
            <input type="number" name="hh" placeholder="Jam" min="0" maxlength="4">
            <input type="number" name="mm" placeholder="Menit" maxlength="2">
            <input type="number" name="ss" placeholder="Detik" maxlength="2">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>

    <?php
    $hh = 0;
    $mm = 0;
    $ss = 0;
    $hari = 0;
    if (isset($_POST["submit"])) {
        $hh = (int) $_POST["hh"];
        $mm = (int) $_POST["mm"];
        $ss = (int) $_POST["ss"];

        $ss = $ss + 1;
        $hitung = $hh;
        $hari = floor($hitung / 24);
        $hh = $hitung - $hari * 24;

        if ($ss >= 60) {
            $mm = $mm + 1;
            $ss = 0; // Menyebabkan detik kembali ke 00

            if ($mm >= 60) {
                $hh = $hh + 1;
                $mm = 0; // Menyebabkan menit kembali ke 00

                if ($hh >= 24) {
                    $hitung = $hh;
                    $hari = floor($hitung / 24);
                    $hh = $hitung - $hari * 24;

                    // Menyebabkan jam kembali ke 00
                } else {
                    $hitung = $hh;
                }
            }
        }

        // Format waktu menjadi dua digit setiap angka
        $hh_str = str_pad($hh, 2, '0', STR_PAD_LEFT);
        $mm_str = str_pad($mm, 2, '0', STR_PAD_LEFT);
        $ss_str = str_pad($ss, 2, '0', STR_PAD_LEFT);

    ?>
        <div class="hasil">
            <p>Keterangan: Hari : Jam : Menit : Detik</p>
            <h1 align="center">
            <?php echo " $hari Hari: $hh_str Jam: $mm_str Menit: $ss_str Detik";} ?></h1>
        </div>

</body>

</html>