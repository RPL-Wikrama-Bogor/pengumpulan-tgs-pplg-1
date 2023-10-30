<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>

<body>
    <center>
        <form action="" method="post">
            <h1>RENTAL MOTOR</h1>
            <table>
                <tr>
                    <td>
                        Masukkan Nama Pelanggan: <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Masukkan Lama Waktu Rental (per hari): <input type="number" name="waktu" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pilih Jenis Motor:
                        <select name="jenis" required>
                            <option value="" disabled selected hidden>Pilih Jenis Motor</option>
                            <option value="Matic">Matic</option>
                            <option value="Sport">Sport</option>
                            <option value="Trail">Trail</option>
                            <option value="Cub">Cub</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $namaPelanggan = $_POST['nama'];
            $lamaRental = $_POST['waktu'];
            $jenisMotor = $_POST['jenis'];

            $rentalMotor = new RentalMotor($namaPelanggan, $lamaRental, $jenisMotor);
            $rentalMotor->hitungTotal();
        }

        class RentalMotor
        {
            private $namaPelanggan;
            private $lamaRental;
            private $jenisMotor;
            private $hargaRental;
            private $namaMember = array("Daffi", "Rassel", "Azhar");
             

            public function __construct($namaPelanggan, $lamaRental, $jenisMotor)
            {
                $this->namaPelanggan = $namaPelanggan;
                $this->lamaRental = $lamaRental;
                $this->jenisMotor = $jenisMotor;
                $this->setHargaRental();
            }

            private function setHargaRental()
            {
                switch ($this->jenisMotor) {
                    case 'Matic':
                        $this->hargaRental = 50000;
                        break;
                    case 'Sport':
                        $this->hargaRental = 60000;
                        break;
                    case 'Trail':
                        $this->hargaRental = 70000;
                        break;
                    case 'Cub':
                        $this->hargaRental = 45000;
                        break;
                    default:
                        $this->hargaRental = 0;
                        break;
                }
            }

            private function isMember()
            {
                return in_array($this->namaPelanggan, $this->namaMember);
            }

            public function hitungTotal()
            {
                $potonganMember = $this->isMember() ? 0.05 : 0; 
                $pajak = 10000;
                $subtotal = $this->hargaRental * $this->lamaRental + $pajak;
                $totalHarga = ($subtotal - ($subtotal * $potonganMember));

                if ($this->isMember()) {
                    echo "Selamat datang, $this->namaPelanggan! Anda mendapatkan potongan harga 5%.<br>";
                }

                echo "---------------- <br>" .
                    "Total harga untuk $this->namaPelanggan <br>
                    yang menyewa motor $this->jenisMotor <br>
                    selama $this->lamaRental hari adalah: Rp. " . number_format($totalHarga, 2) .
                    "<br> ----------------";
            }
        }

        
        ?>



    </center>
</body>

</html>