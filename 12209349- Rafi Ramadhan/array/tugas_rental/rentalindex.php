<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <div style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
    <h1>Form Peminjaman Motor</h1>
    <form action="" method="post">
        Nama: <input type="text" name="nama" required><br>
        Waktu Peminjaman (hari): <input type="number" name="waktu_peminjaman" min="1" value="1"><br>
        Jenis Motor: <select name="jenis_motor">
            <option value="scoopy">Scoopy</option>
            <option value="mio">Mio</option>
            <option value="supra">Supra</option>
        </select><br>
        <button type="submit">Cek</button>
    </form>

    <?php
    include('rentalmotor.php');

    if ($_POST) {
        $nama = $_POST['nama'];
        $waktuPeminjaman = (int)$_POST['waktu_peminjaman']; 
        $jenisMotor = $_POST['jenis_motor'];

        $rental = new MotorRental($nama, $waktuPeminjaman, $jenisMotor);

        echo "<h2>Detail Peminjaman</h2>";
        $rental->tampilkanDetailPeminjaman();
    }
    
    ?>
    </div>
</body>
</html>