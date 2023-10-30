<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <table>
            <!-- Judul halaman -->
            <h2>Rental Motor</h2>
            <form action="" method="post">
                <tr>
                    <td>Nama:</td>
                    <td>
                        <!-- Input untuk memasukkan nama, dibutuhkan (required) -->
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Durasi Pinjaman(Hari):</td>
                    <td>
                        <input type="number" name="hari" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Motor: </td>
                    <td>
                        <select name="jenis" required>
                            <option value="" disabled selected hidden>-----------Pilih-----------</option>
                            <option value="h2">h2</option>
                            <option value="zx25">zx25</option>
                            <option value="cbr">cbr</option>
                            <option value="panigale">panigale</option>
                        </select>
                    </td>
                </tr>
                <tr>
                 
                    <td colspan="2"><input type="submit" value="buy" name="kirim"></td>
                </tr>
            </form>
        </table>
    </center>

    <?php
   
    $proses = new buy();

    $proses->setHarga(400000, 100000, 900000, 600000);
    if (isset($_POST['kirim'])) {

        $proses->jumlah = $_POST['hari'];

        $proses->model = $_POST['jenis'];

        $proses->harga();
        $proses->strukPembelian();
    }
    ?>

    <?php

    class motor {
        private $h2,
        $zx25,
        $cbr,
        $panigale;
        protected $pajak;
        public $jumlah;
        public $model;

        // Ini adalah metode untuk mengatur harga berbagai tipe motor.
        public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
            $this->h2 = $tipe1;
            $this->zx25 = $tipe2;
            $this->cbr = $tipe3;
            $this->panigale = $tipe4;
        }
        //Menyimpan harga motor tipe "h2" ke dalam array $data. Harga motor scooter diambil dari properti h2 
        public function getHarga() {
            $data["h2"] = $this->h2; 
            $data["zx25"] = $this->zx25;
            $data["cbr"] = $this->cbr;
            $data["panigale"] = $this->panigale;
            return $data;
        }
    }
    
    class buy extends motor {
        private $members = [
            "Rasya","vencel","fathir" => 5,
        ];

        public function harga() {
            $dataHarga = $this->getHarga();

            if (isset($dataHarga[$this->model])) {
                $hargaBeli = $this->jumlah * $dataHarga[$this->model];
                $pajak = 10000;

                $diskon = 0;
                if (!empty($_POST['nama'])) {
                    $buyerName = $_POST['nama'];
                    $this->buyerName = $buyerName;
                    if (isset($this->members[$buyerName])) {

                        $diskon = $this->members[$buyerName];
                    }
                }

                $hargaDiskon = $hargaBeli * ($diskon / 100);

                $hargaBayar = $hargaBeli + $pajak - $hargaDiskon;

                return $hargaBayar;
            } else {
                return null;
            }
        }

        public function strukPembelian() {
            echo "<center>";
            echo "---------------------------------------------------------" . "<br>";
            if ($this->harga() !== null) {
                if (isset($this->members[$this->buyerName])) {
                    $diskon = $this->members[$this->buyerName];
                    echo "Bahwa anda " . $this->buyerName . ", merupakan member dan mendapat diskon " . $diskon . "%" . "<br>";
                } else {
                    $diskon = 0;
                    echo "Bahwa anda " . $this->buyerName . ", merupakan non-member dan mendapat diskon 0%" . "<br>";
                }
                echo "Anda menyewa motor " . ($this->model) . "<br>";
                echo "Dengan Durasi hari: " . $this->jumlah . " Hari <br>";
                
                echo "Total yang harus anda bayar (Pajak Rp. 10.000) Rp. " . number_format($this->harga(), 0, '', '.') . "<br>";
            } else {
                echo "Tipe motor tidak valid.";
            }
            echo "--------------------------------------------------------";
            echo "</center>";
        }
    }
    ?>
</body>
</html>
