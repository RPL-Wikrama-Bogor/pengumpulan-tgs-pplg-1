<?php
class Mobil
{
    public $nama;
    public $waktu;
    public $jenis;
    protected $diskon;
    protected $pajak;
    private $member = ['minghao', 'jeno', 'wonwoo', 'sunghoon'],
            $Honda,
            $Suzuki,
            $Bugatti,
            $BMW;


     function __construct(){
        $this->diskon = 0.1;
        $this->pajak  = 10000;
     }

     public function setHarga($type1, $type2, $type3, $type4) {
        $this->Honda   = $type1;
        $this->Suzuki  = $type2;
        $this->Bugatti = $type3;
        $this->BMW     = $type4;
    } 

    public function getNama(){
        $data = $this->nama;
        return $data;
    }

    public function getMember(){
        return $this->member;
    }

    public function getHarga(){
        $data["Honda"]   = $this->Honda;
        $data["Suzuki"]  = $this->Suzuki;
        $data["Bugatti"] = $this->Bugatti;
        $data["BMW"]     = $this->BMW;
        return $data;
    }
}

class Rental extends Mobil
{
    public function hargaBeli() {
        $dataHarga  = $this->getHarga();
        $hargaBayar = $this->waktu * $dataHarga[$this->jenis];
        $total      = $hargaBayar + $this->pajak;
        return $total;
    } //harga non member

    public function hargaPerHari(){
        $dataHarga  = $this->getHarga();
        $hrgPerHari = $dataHarga[$this->jenis];
        return $hrgPerHari;
    } //buat nunjukin harga satu hari berapa

    public function Member(){
        $dataHarga   = $this->getHarga();
        $hargaBeli   = $this->waktu * $dataHarga[$this->jenis];
        $hargaDiskon = $hargaBeli * $this->diskon;
        $hargaBayar  = $hargaBeli - $hargaDiskon + $this->pajak;
        return $hargaBayar;
    } //harga khusus member

    public function cetakPembelian() {

        if (in_array(($this->getNama()), $this->getMember())) {
            echo "<div style='text-align: center; border:3px gray solid; width: 36%; margin-left: 32%;'>";
            echo "<h2> Struk Rental Mobil </h2>";
            echo "<hr style='border:1px #0F2C59 solid; width:60%'> <br>";            
            echo $this->nama . " berstatus sebagai Member mendapatkan diskon sebesar 10% <br>";
            echo "Jenis mobil yang dirental adalah " . $this->jenis . " selama " . $this->waktu . " hari <br>";
            echo "Harga rental per-harinya : " . number_format($this->hargaPerHari(), 0, '', '.') . "<br> <br>";
            echo "Besar yang harus dibayarkan adalah Rp. " . number_format($this->Member(), 0, '', '.') . "<br>";
            echo "<br><br> <hr style='border:1px #0F2C59 solid; width:60%'><br>";            
            echo "</div>"; 

        }else {

            echo "<div style='text-align: center; border:3px gray solid; width: 36%; margin-left: 32%;'>";
            echo "<h2> Struk Rental Mobil </h2>";
            echo "<hr style='border:1px #0F2C59 solid; width:60%'> <br>"; 
            echo $this->nama . " tidak bestatus sebagai Member <br>";
            echo "Jenis motor yang dirental adalah " . $this->jenis . " selama " . $this->waktu . " hari <br>";
            echo "Harga rental per-harinya : " . number_format($this->hargaPerHari(), 0, '', '.') . "<br> <br>";
            echo "Besar yang harus dibayarkan adalah Rp. " . number_format($this->hargaBeli(), 0, '', '.') . "<br>";
            echo "<br><br> <hr style='border:1px #0F2C59 solid; width:60%'><br>";   
            echo "</div>"; 
        }
    }

}
?>