<?php

class Shell
{
    protected $harga;
    protected $jenis;
    protected $ppn;

    public function __construct($jenis, $harga)
    {
        $this->jenis = $jenis;
        $this->harga = $harga;
        $this->ppn = 0.1; // PPN 10%
    }

    public function hitungTotal($jumlahLiter)
    {
        $total = ($this->harga * $jumlahLiter) * (1 + $this->ppn);
        return $total;
    }

    public function getJenis()
    {
        return $this->jenis;
    }
}

class Beli extends Shell
{
    public $jumlahLiter;

    public function __construct($jenis, $harga, $jumlahLiter)
    {
        parent::__construct($jenis, $harga);
        $this->jumlahLiter = $jumlahLiter;

    }

    public function tampilkanTransaksi()
    {
        $totalBayar = $this->hitungTotal($this->jumlahLiter);
        echo "<div style='text-align: center; border:3px gray solid; width: 36%; margin-left: 32%;'>"; 
        echo "<h2> Struk Pembelian Bahan Bakar </h2>";
        echo "<hr style='border:2px yellow dashed; width:60%'> <br>";
        echo "Anda membeli bahan bakar minyak tipe: " . $this->getJenis() . "<br>";
        echo "Dengan Jumlah: " . $this->jumlahLiter . " liter<br>";
        echo "Total yang harus anda bayar: Rp. " . number_format($totalBayar, 2);
        echo "<br><br> <hr style='border:2px yellow dashed; width:60%'><br>";
        echo "</div>"; 
    }
}


?>