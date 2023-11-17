<?php
require("backend.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Rental Mobil</title>
</head>

<body>
    <div style='text-align: center;'>
        <h1>Rental Mobil</h1>
        <form action="" method="post">
            <center>
                <table>
                    <tr>
                        <td><label for="nama">Nama pelanggan:</label></td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td><label for="waktu">Lama waktu rental (Per hari):</label></td>
                        <td><input type="number" name="waktu" required></td>
                    </tr>
                    <tr>
                        <td><label for="jenis">Pilih tipe bahan bakar:</label></td>
                        <td>
                            <select name="jenis" required>
                                <option value="Honda">Honda</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Bugatti">Bugatti</option>
                                <option value="BMW">BMW</option>
                            </select>
                        </td>
                    </tr>
                </table><br>
                <input type="submit" name="submit" value="Rental"><br><br>   
            </center>

        </form>
        <?php
           $proses = new Rental(); //manggil class
           $proses->setHarga(70000, 80000, 90000, 12000); //set harga
           if (isset($_POST['submit'])) {
               $proses->nama  = $_POST['nama']; //ngambil data berdasarkan variable
               $proses->jenis = $_POST['jenis'];
               $proses->waktu = $_POST['waktu'];
                
               if ($_POST['waktu'] > 0){
                    $proses->hargaBeli();
                    $proses->Member();
                    $proses->cetakPembelian();
               } else {
                echo "Pilih Waktu yang valid !";
               }

           }
            ?>
    </div>

</body>

</html>