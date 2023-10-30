<?php require 'Rental.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            flex-direction: column;
        }

        .box {
            background-color: rgb(212 212 212);
            width: 50%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .btn {
            padding: 8px 10px;
            border: none;
            border-radius: 5px;
            background-color: rgb(96 150 250);
            color: white;
            font-weight: bold;
        }
        
        .btn:hover {
            cursor: pointer;
            background-color: rgb(59 130 246);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
        }

        #jenis {
            width: 100%;
            padding: 10px;
        }

        .result {
            padding: 2px 4px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Rental Motor</h1>
            <form method="post" action="">
                <label for="nama">Nama Pelanggan: </label>
                <input type="text" name="nama" placeholder="Nama..." required>

                <label for="waktu">Lama Waktu Rental (per hari): </label>
                <input type="text" name="dayOfRent" placeholder="Waktu rental..." required>

                <label for="jenis">Jenis Motor: </label>
                <select name="jenis" id="jenis" required>
                    <option value="" selected disabled>---Pilih---</option>
                    <option value="scooter">Scooter</option>
                    <option value="aerox">Aerox</option>
                    <option value="vario">Vario</option>
                    <option value="mio">Mio</option>
                </select>

                <input type="submit" name="submit" class="btn">
            </form><br>

            <div class="result">
                <?php
                if (isset($_POST['submit'])) {
                    $namaPelanggan = ucfirst($_POST['nama']);
                    $lamaRental = intval($_POST['dayOfRent']);
                    $jenisMotorRental = $_POST['jenis'];

                    $rental = new Checkout();
                    $rental->tampilkanInformasiRental($namaPelanggan, $lamaRental, $jenisMotorRental);
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>
