<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bensin</title>
</head>
<body>
    <center>
    <?php
    if (isset($_POST['submit'])) {

        $jumlahLiter = $_POST['liter'];
        $tipeBahanBakar = $_POST['tipe'];

        class Shell {
            public $harga;
            public $jenis;
            public $ppn;

            public function __construct($harga, $jenis) {
                $this->harga = $harga;
                $this->jenis = $jenis;
                $this->ppn = 0.1;
            }
        }

        class Beli extends Shell {
            public $jumlah;

            public function __construct($harga, $jenis, $jumlah) {
                parent::__construct($harga, $jenis);
                $this->jumlah = $jumlah;
            }

            public function hitungTotal() {
                $subtotal = $this->harga * $this->jumlah;
                $totalPpn = $subtotal * $this->ppn;
                $totalHarga = $subtotal + $totalPpn;
                return $totalHarga;
            }
        }

        $hargaShellSuper = 15420;
        $hargaShellVPower = 16130;
        $hargaShellVPowerDiesel = 18310;
        $hargaShellVPowerNitro = 16510;

        
        $hargaBahanBakar = 0;

        switch ($tipeBahanBakar) {
            case 'Shell Super':
                $hargaBahanBakar = $hargaShellSuper;
                break;
            case 'Shell V-Power':
                $hargaBahanBakar = $hargaShellVPower;
                break;
            case 'Shell V-Power Diesel':
                $hargaBahanBakar = $hargaShellVPowerDiesel;
                break;
            case 'Shell V-power Nitro':
                $hargaBahanBakar = $hargaShellVPowerNitro;
                break;
            default:
                echo "Silakan pilih tipe bahan bakar.";
                break;
        }

        if ($hargaBahanBakar > 0) {
            $beliBahanBakar = new Beli($hargaBahanBakar, $tipeBahanBakar, $jumlahLiter);
            $totalHarga = $beliBahanBakar->hitungTotal();
            echo "---------------- <br>" .
            "Total harga untuk $jumlahLiter liter <br>
            $tipeBahanBakar : Rp. " . number_format($totalHarga, 2) .
             "<br> ----------------" ;
        }
    }
    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Masukkan Jumlah Liter: <input type="number" name="liter">
                </td>
            </tr>
            <tr>
                <td>
                    Pilih tipe bahan bakar:
                    <select name="tipe" required>
                        <option value="" disabled selected hidden>Pilih Bahan Bakar</option>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-power Nitro">Shell V-Power Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</center>
</html>
