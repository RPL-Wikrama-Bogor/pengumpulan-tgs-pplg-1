<?php
class Shell {
    protected $harga;
    protected $jumlah;
    protected $tipe;
    protected $ppn;

    public function __construct($harga, $tipe) {
        $this->harga = $harga;
        $this->tipe = $tipe;
        $this->jumlah = 0;
        $this->ppn = 0.10; 
    }

    public function tambahJumlah($jumlah) {
        $this->jumlah += $jumlah;
    }
    
    public function hitungTotal() {
        $totalSebelumPPN = $this->harga * $this->jumlah;
        $totalPPN = $totalSebelumPPN * $this->ppn;
        $totalSetelahPPN = $totalSebelumPPN + $totalPPN;
        return $totalSetelahPPN;
    }
    
    public function cetakStruk() {
        $total = $this->hitungTotal();
        echo "------------------------------";
        echo "<br>";
        echo "Anda membeli Bahan Bakar tipe {$this->tipe}\n";
        echo "<br>";
        echo "Dengan jumlah Liter: {$this->jumlah}\n";
        echo "<br>";
        echo "Total yang harus anda bayar Rp. {$total}\n";
        echo "<br>";
        echo "------------------------------";
    }
}

class Beli extends Shell {
    public function __construct($tipe, $jumlah) {
        switch ($tipe) {
            case 'Shell Super':
                $harga = 15420;
                break;
                case 'Shell V-Power':
                $harga = 16130;
                break;
                case 'Shell V-Power Diesel':
                    $harga = 18310;
                    break;
                    case 'Shell V-Power Nitro':
                        $harga = 16510;
                        break;
                        default:
                        $harga = 0;
                    }
                    parent::__construct($harga, $tipe);
                    $this->tambahJumlah($jumlah);
                }
            }
            
            if (isset($_POST["submit"])) {
                $tipe = $_POST["tipe"];
                $jumlah = $_POST["jumlah"];
                
                $transaksi = new Beli($tipe, $jumlah);
            }
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaksi Pembelian Bahan Bakar</title>
    </head>
    
    <body>
    <center>
    <h1>Transaksi Pembelian Bahan Bakar</h1>
    <form action="" method="post">
        <label for="tipe">Tipe Bahan Bakar:</label>
        <select name="tipe" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>

        <label for="jumlah">Masukan jumlah Liter:</label>
        <input type="number" name="jumlah" required><br>

        <input type="submit" value="Hitung" name="submit">
    </form>

    <?php
    if (isset($transaksi)) {
        echo "<h2>Hasil Perhitungan:</h2>";
        $transaksi->cetakStruk();
    }
    ?>
    </center>
</body>

</html>
