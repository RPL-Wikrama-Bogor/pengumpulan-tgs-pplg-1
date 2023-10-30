<!DOCTYPE html>
<html>

<head>
    <title>Tiket Bioskop</title>
</head>
<style>
  
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: radial-gradient(#FFE6E6, #E19898, #E19898 );
    }

    h2 {
        text-align: center;
        padding: 20px 0;
        text-transform: capitalize;
        color: gainsboro;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        background-color:white;
        box-shadow: 20px;
    }

    h3 {
        margin-top: 20px;
    }
    h4 {
        color: red;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border-radius:5px ;
        border: none;
        margin-bottom: 10px;
        box-sizing: border-box;
        background-color: #EFEFEF ;
    }

    input[type="submit"] {
        display: block;
        margin: 20px auto 0;
        padding: 10px 20px;
        background-color: #4E4FEB;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    input[type="submit"]:hover {
        background-color: #4E4FEB;
    }

    @media screen and (max-width: 768px) {
        form {
            margin: 20px;
        }
        input[type="submit"] {
            margin-top: 20px;
        }


    }
</style>

<body>
   
    <h2>Penghitungan Penjualan Tiket Bioskop</h2>
    <form action="" method="post">
        <h3>Kelas VIP</h3>
        <label>Jumlah Tiket Terjual : </label>
        <input type="number" name="tiket_vip" required><br>

        <h3>Kelas Eksekutif</h3>
        <label>Jumlah Tiket Terjual : </label>
        <input type="number" name="tiket_eksekutif" required><br>

        <h3>Kelas Ekonomi</h3>
        <label> Jumlah Tiket Terjual : </label>
        <input type="number" name="tiket_ekonomi" required>
        <input id="teks_input" type="submit" name="submit" value="Hitung">
    

    <?php
    if (isset($_POST['submit'])) {
        $tiket_vip = $_POST['tiket_vip'];
        $tiket_eksekutif = $_POST['tiket_eksekutif'];
        $tiket_ekonomi = $_POST['tiket_ekonomi'];

        $keuntungan_vip = 0;
        $keuntungan_eksekutif = 0;
        $keuntungan_ekonomi = 0;
        $total_keuntungan = 0;

        if ($tiket_vip >= 35) {
            $keuntungan_vip = 0.25;
        } elseif ($tiket_vip >= 20) {
            $keuntungan_vip = 0.15;
        } else {
            $keuntungan_vip = 0.05;
        }

        if ($tiket_eksekutif >= 40) {
            $keuntungan_eksekutif = 0.20;
        } elseif ($tiket_eksekutif >= 20) {
            $keuntungan_eksekutif = 0.10;
        } else {
            $keuntungan_eksekutif = 0.02;
        }

        $keuntungan_ekonomi = 0.07;

        $total_keuntungan = ($tiket_vip * 50 * $keuntungan_vip) + ($tiket_eksekutif * 50 * $keuntungan_eksekutif) + ($tiket_ekonomi * 50 * $keuntungan_ekonomi);

        echo "<h4>Hasil Penghitungan !!</h4>";
        echo "Keuntungan Kelas VIP : $" . number_format($tiket_vip * 50 * $keuntungan_vip, 2) . "<br>";
        echo "Keuntungan Kelas Eksekutif : $" . number_format($tiket_eksekutif * 50 * $keuntungan_eksekutif, 2) . "<br>";
        echo "Keuntungan Kelas Ekonomi : $" . number_format($tiket_ekonomi * 50 * $keuntungan_ekonomi, 2) . "<br>";
        echo "Total Keuntungan : $" . number_format($total_keuntungan, 2);
    }
    ?>
     </form>
</body>

</html>