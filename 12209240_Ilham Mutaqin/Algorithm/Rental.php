<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel="stylesheet" href="styleRntl.css">
</head>

<body>
    <div class="card">
        <h2>Rental Motor</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="hari">Durasi Pinjaman (Hari):</label>
                <input type="number" name="hari" id="hari" required>
            </div>
            <div class="form-group">
                <label for="jenis">Pilih Tipe Motor:</label>
                <select name="jenis" id="jenis" required>
                    <option value="Honda Vario">Vario 150</option>
                    <option value="Yamaha R1M">R1M</option>
                    <option value="BMW F800 GT">F800 GT</option>
                    <option value="KTM 250">KTM 250</option>
                </select>
            </div>
            <button type="submit" name="kirim">Sewa</button>
        </form>
        <?php
        class Motor
        {
            private $vario150,
                $yamahaR1M,
                $BMWF800GT,
                $KTM250;
            protected $pajak,
                $buyerName;
            public $jumlah;
            public $model;

            public function setHarga($tipe1, $tipe2, $tipe3, $tipe4)
            {
                $this->vario150 = $tipe1;
                $this->yamahaR1M = $tipe2;
                $this->BMWF800GT = $tipe3;
                $this->KTM250 = $tipe4;
            }

            public function getHarga()
            {
                $data["Honda Vario"] = $this->vario150;
                $data["Yamaha R1M"] = $this->yamahaR1M;         
                $data["KTM 250"] = $this->KTM250;
                return $data;
            }
        }

        class Buy extends Motor
        {

            private $members = [
                "Fauzi" => 5,
                "Yanto" => 5,
            ];

            public function harga()
            {
                $dataHarga = $this->getHarga();
                $pajak = $this->pajak;
                $hargaSewa = $this->jumlah * $dataHarga[$this->model];
                $pajak = 10000;

                $diskon = 0;
                if (!empty($_POST['nama'])) {
                    $buyerName = $_POST['nama'];
                    $this->buyerName = $buyerName;
                    if (isset($this->members[$buyerName])) {
                        $diskon = $this->members[$buyerName];
                    }
                }

                $hargaDiskon = $hargaSewa * ($diskon / 100);
                $hargaBayar = $hargaSewa + $pajak - $hargaDiskon;

                return $hargaBayar;
            }

            public function strukPembelian()
            {

                echo "<h2>Rental Motor</h2>";
                if (isset($this->members[$this->buyerName])) {
                    $diskon = $this->members[$this->buyerName];
                    echo   $this->buyerName . ", merupakan member dan mendapat diskon " . $diskon . "%" . "<br>" . "<br>";
                } else {
                    $diskon = 0;
                    echo $this->buyerName . ", merupakan non-member dan tidak mendapatkan  diskon   " . "<br>" . "<br>";
                }
                echo "Anda menyewa motor " . $this->model . "<br>";
                echo "Dengan Durasi hari: " . $this->jumlah . " Hari <br>";

                echo "Total yang harus anda bayar Beserta Pajak Sebesar Rp10.000 adalah sebesar : Rp. " . number_format($this->harga(), 0, '', '.') . "<br>";
                echo "</div>";
            }
        }

        $proses = new Buy();
        $proses->setHarga(400000, 100000, 900000, 600000);
        if (isset($_POST['kirim'])) {
            $proses->jumlah = $_POST['hari'];
            $proses->model = $_POST['jenis'];

            $proses->harga();
            $proses->strukPembelian();
        }
        ?>

    </div>
</body>

</html>