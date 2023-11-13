<?php

class Shell
{
    protected $tipe;
    protected $harga;
    protected $ppn;

    public function __construct($tipe, $harga, $ppn)
    {
        $this->tipe = $tipe;
        $this->harga = $harga;
        $this->ppn = $ppn;
    }
}

class Buy extends Shell
{
    public $jumlah;

    public function hitungTotal()
    {
        $hargaSebelumPpn = $this->harga * $this->jumlah;
        $hargaSesudahPpn = $hargaSebelumPpn * (1 + $this->ppn);
        return [$hargaSebelumPpn, $hargaSesudahPpn];
    }

    public function getStruk()
    {
        list($hargaSebelumPpn, $hargaSesudahPpn) = $this->hitungTotal();
        echo "############# Struk Pembelian Shell ############# <br/>";
        echo "Nama Produk: {$this->tipe}<br/>";
        echo "Harga/Liter: Rp. ". number_format($this->harga, 0) ."<br/>";
        echo "Jumlah Volume: {$this->jumlah} Liter <br/>";
        echo "Harga: Rp. " . number_format($hargaSebelumPpn, 0) . "<br>";
        echo "Total Harga(PPN): Rp. " . number_format($hargaSesudahPpn, 0) . "<br>";
        echo "#############  ". date("d/m/Y, H:i") ."  ############# <br/>";
    }
}

