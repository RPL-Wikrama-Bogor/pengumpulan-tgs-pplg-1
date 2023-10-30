<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
        .container{
            width: 550px;
            margin: 8px auto;
            padding: 20px;
            border-radius: 15px
        }
        
        .hasil{
            text-align: center;
            padding: 20px;
            outline: auto;
        }
    </style>
</head>
<body>
    <div class="container">
    <center><h1>Rental Motor</h1></center>
    <form method = "post" action="#">
        <table>
            <tr>
                <td><label for="nama">Nama Pelanggan</label></td>
                <td>:</td>
                <td><input type="text" name = "nama"></td>
            </tr>
            <tr>
                <td><label for="waktu">Lama Waktu Rental (per hari)</label></td>
                <td>:</td>
                <td><input type="text" name="waktu"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis Motor</label></td>
                <td>:</td>
                <td><select name="jenis" id="jenis">
                <option value="scooter">Scooter</option>
                <option value="aerox">Aerox</option>
                <option value="vario">Vario</option>
                <option value="mio">Mio</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" ></td>
            </tr>
        </table>
    </form><br>

    <div class="hasil">
    <?php
    class Rental {
        private $memberList = ["Kayla", "Luffy", "Dimas"];

        public function isMember($nama) {
            return in_array($nama, $this->memberList);
        }

        public function hitungDiskon($lamaWaktu, $isMember) {
            if ($isMember && $lamaWaktu > 0) {
                return 5;
            }
            return 0;
        }

        public function tampilkanInformasiRental($nama, $lamaWaktu, $jenisMotor) {
            $isMember = $this->isMember($nama);
            $diskon = $this->hitungDiskon($lamaWaktu, $isMember);
            $hargaPerHari = $this->hargaRentalPerHari($jenisMotor);
            $totalSebelumDiskon = $hargaPerHari * $lamaWaktu;
            $totalDiskon = ($totalSebelumDiskon * $diskon) / 100;
            $totalSetelahDiskon = $totalSebelumDiskon - $totalDiskon;
            $pajak = 10000;
            $totalBiaya = $totalSetelahDiskon + $pajak;

            echo $nama . " berstatus sebagai " . ($isMember ? "Member" : "Non-Member"). " ";
            echo ($isMember ? "mendapatkan diskon sebesar " . $diskon . "%" : "mendapatkan diskon sebesar 0%") . "<br>";
            echo "Jenis motor yang di rental adalah " . $jenisMotor . " selama " . $lamaWaktu . " hari<br>";
            echo "Harga rental per harinya: Rp. " . number_format($hargaPerHari, 0, ',', '.') . "<br><br>";
            // echo "Total harga sebelum diskon: Rp. " . number_format($totalSebelumDiskon, 0, ',', '.') . "<br>";
            // echo "Total diskon: Rp. " . number_format($totalDiskon, 0, ',', '.') . "<br><br>";
            echo "Besar yang harus di bayarkan adalah :<b> Rp. " . number_format($totalBiaya, 0, ',', '.') . "</b>";
        }

        public function hargaRentalPerHari($jenisMotor) {
            $hargaPerHari = 0;

            switch ($jenisMotor) {
                case 'scooter':
                    $hargaPerHari = 60000;
                    break;
                case 'aerox':
                    $hargaPerHari = 90000;
                    break;
                case 'vario':
                    $hargaPerHari = 80000;
                    break;
                case 'mio':
                    $hargaPerHari = 50000;
                    break;
            }

            return $hargaPerHari;
        }
    }

    if (isset($_POST['submit'])) {
        $namaPelanggan = $_POST['nama'];
        $lamaWaktuRental = intval($_POST['waktu']);
        $jenisMotorRental = $_POST['jenis'];

        $rental = new Rental();
        $rental->tampilkanInformasiRental($namaPelanggan, $lamaWaktuRental, $jenisMotorRental);
    }
    ?>
    </div>
    </div>

</body>
</html>