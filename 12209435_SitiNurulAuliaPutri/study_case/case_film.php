<?php
    $listfilm = [
        [
            "judul" => "Alchemy of soul",
            "usia" => 15,
            "harga" => 50000
        ],
        [
            "judul" => "Doraemon",
            "usia" => 3,
            "harga" => 20000
        ],
        [
            "judul" => "keluarga cemara",
            "usia" => 5,
            "harga" => 30000
        ]
    ];

  
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>case film</title>
        <style>
            body{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <h3 style='color: #EFB495; text-align: center;'>Bioskop Hao8 !</h3>
        <form action="" method="post" >
            <table style='justify-content: center;' >
                <tr>
                <td>Usia</td>
                <td><input type="number" name="usia"></td>
                </tr>
                <tr>
                    <td>Film</td>
                    <td>    
                        <select name="judul">
                            <option hidden>- Pilih Film -</option>
                                <?php foreach ($listfilm as $key => $film) { ?>
                                    <option value="<?= $key ?>"><?= $film['judul'] ?></option>
                                <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
        $usia = $_POST['usia'];
        $IDfilm = $_POST['judul'];

        $minUsia = $listfilm[$IDfilm]['usia'];
        $harga = $listfilm[$IDfilm]['harga'];

        if ($usia > $minUsia) {
            echo "<h4 style='color: #053B50'> Silahkan untuk membayar sebesar Rp. " . number_format($harga,0, ' ', '.') . " selamat menonton ! </h4>";
        } else {
            echo "<h4 style='color: #AE445A'> Mohon maaf usia anda belum cukup</h4>";
        }
    }
    ?>
    </body>
    </html>