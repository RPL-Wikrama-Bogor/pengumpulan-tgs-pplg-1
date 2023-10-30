<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            Form Contoh
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group ">
                                    <label for="nama">Usia</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                                </div>
                                <div class="form-group">
                                    <label for="email">Film</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html> -->
<?php

$listFilm = [
    [
        "judul" => "Miracle In Cell No. 7",
        "min-usia" => 15,
        "harga" => 45000
    ],
    [
        "judul" => "The Invitation",
        "min-usia" => 17,
        "harga" => 35000
    ],
    [
        "judul" => "Luck",
        "min-usia" => 7,
        "harga" => 35000
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Daftar Film Bioskop</h1>
        <tr>
            <td>Usia : </td>
            <td><input type="number" name="usia"></td></br>
        </tr>
        <tr>
            <td>Film : </td>
            <td>
                <select name="judul">
                    <option hidden>Pilih Film</option>

                    <?php
                    foreach ($listFilm as $key => $film) {?>
                    
                        <option value="<?= $key ?>"><?= $film['judul'] ?></option>

                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </form>
</body>

</html>


<?php


if (isset($_POST['simpan'])) {
    $usia = $_POST['usia'];
    $filmId = $_POST['judul'];

    $minUsia = $listFilm[$filmId]['min-usia'];
    $harga = $listFilm[$filmId]['harga'];

    if ($usia > $minUsia) {
        echo "Silahkan Untuk Membayar Sebesar Rp. ". $harga;
    } else {
        echo "Usianya belum cukup";
    }
}

?>