
<?php
    class Shell {
        protected $tipe;
        protected $harga;
        protected $ppn;

        public function __construct($tipe, $harga, $ppn) {
            $this->tipe = $tipe;
            $this->harga = $harga;
            $this->ppn = $ppn;
        }
    }

    class Beli extends Shell {
        public $jumlah;

        public function total() {
            $total_sebelum_ppn = $this->harga * $this->jumlah;
            $total_setelah_ppn = $total_sebelum_ppn * (1 + $this->ppn);
            return [$total_sebelum_ppn, $total_setelah_ppn];
        }

        public function bukti(){
            list($total_sebelum_ppn, $total_setelah_ppn) = $this->total();
            echo "<center>";
            echo "----------------------------------------------------<br>";
            echo "Anda membeli bahan bakar minyak tipe {$this->tipe}<br>";
            echo "Dengan jumlah: {$this->jumlah} Liter<br>";
            echo "Total yang harus anda bayar Rp. " . number_format($total_setelah_ppn, 2) . "<br>";
            echo "----------------------------------------------------";
            echo "</center>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liter = floatval($_POST['liter']);
        $tipe = $_POST['tipe_bbm'];
        $harga = [
            "Shell Super" => 15420.00,
            "Shell V-Power" => 16130.00,
            "Shell V-Power Diesel" => 18310.00,
            "Shell V-Power Nitro" => 16510.00
        ];

        if (array_key_exists($tipe, $harga)) {
            $bbm = new Beli($tipe, $harga[$tipe], 0.10);
            $bbm->jumlah = $liter;
            $bbm->bukti();
        } else {
            echo "Tipe bahan bakar tidak valid!";
        }
    }
    ?>