<?php
class Data {
    protected $diskon;
    protected $pajak;
    private $Scooter,
            $Sport,
            $SportWuling,
            $Cross,
            $member = ['naya', 'enola', 'liya'];
    public $nama;
    public $jenis;
    public $waktu;

    function __construct() {
        $this->diskon = 0.05;
        $this->pajak = 10000;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->Scooter = $tipe1;
        $this->Sport = $tipe2;
        $this->SportWuling = $tipe3;
        $this->Cross = $tipe4;
    }

    public function getNama() {
        $data = $this->nama;
        return $data;
    }

    public function getMember() {
        return $this->member;  
    }

    public function getHarga() {
        $data["Scooter"] = $this->Scooter;
        $data["Sport"] = $this->Sport;
        $data["SportWuling"] = $this->SportWuling;
        $data["Cross"] = $this->Cross;
        return $data;
    }
}

class Pembelian extends Data {
    public function hargaBeli() {
        $dataHarga = $this->getHarga();
        $hargaBayar = $this->waktu * $dataHarga[$this->jenis];
        $total = $hargaBayar + $this->pajak;
        return $total;
    }

    public function hargaPerHari(){
        $dataHarga = $this->getHarga();
        $hrgPerHari =$dataHarga[$this->jenis];
        return $hrgPerHari;
    }

    public function Member(){
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->waktu * $dataHarga[$this->jenis];
        $hargaDiskon = $hargaBeli * $this->diskon;
        $hargaBayar = $hargaBeli - $hargaDiskon + $this->pajak;
        return $hargaBayar;
    }


    public function cetakPembelian() {

        if (in_array(($this->getNama()), $this->getMember())) {
            echo "<div style='text-align: center; border-style: groove; margin: 30px 400px; padding: 15px;'>";
            echo $this->nama . " berstatus sebagai Member mendapatkan diskon sebesar 5% <br>";
            echo "Jenis motor yang dirental adalah " . $this->jenis . " selama " . $this->waktu . " hari <br>";
            echo "Pajak untuk 1 motor adalah " . number_format($this->pajak, 0, '', '.') . "<br>";
            echo "Harga rental per-harinya : " . number_format($this->hargaPerHari(), 0, '', '.') . "<br> <br>";
            echo "Besar yang harus dibayarkan adalah Rp. " . number_format($this->Member(), 0, '', '.') . "<br>";
            echo "</div>"; 

        }else {

            echo "<div style='text-align: center; border-style: groove; margin: 30px 400px; padding: 15px;'>";
            echo $this->nama . " bestatus sebagai Non Member <br>";
            echo "Jenis motor yang dirental adalah " . $this->jenis . " selama " . $this->waktu . " hari <br>";
            echo "Pajak untuk 1 motor adalah " . number_format($this->pajak, 0, '', '.') . "<br>";
            echo "Harga rental per-harinya : " . number_format($this->hargaPerHari(), 0, '', '.') . "<br> <br>";
            echo "Besar yang harus dibayarkan adalah Rp. " . number_format($this->hargaBeli(), 0, '', '.') . "<br>";
            echo "</div>"; 
        }
    }

}
?>