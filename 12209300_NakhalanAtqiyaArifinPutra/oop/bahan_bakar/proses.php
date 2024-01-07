<?php
class Shell{
    public  $Shell_Super = 15420,
            $Shell_V_Power = 16130,
            $Shell_V_Power_Diesel = 18310,
            $Shell_V_Power_Nitro = 16510;

    public $PPN =10/100;

}

class Beli extends Shell{

    public function hitung($harga, $jumlah)
    {
        $hAkhir = $harga * $jumlah + ($harga * $jumlah * $this->PPN);
        echo " <div class='cetak'>";
        echo "Anda Membeli Bahan Bakar Minyak : ". $_POST['bahanBakar'] ."<br>";
        echo "Dengan Jumlah : $jumlah Liter <br>";
        echo "Total Yang Harus Anda bayar : Rp." . number_format($hAkhir, 0, ',', '.')."<br>";
        echo "<br>";
        echo "</div>";
    }
}


if(isset($_POST['button'])){

    $shell = new Beli();

    $bahanBakar = $_POST['bahanBakar'];
    $jumlah = $_POST['liter'];

    switch($bahanBakar){
        case "Shell Super" : 
            $harga = $shell->Shell_Super;
            break;
        case "Shell V-Power" : 
            $harga = $shell->Shell_V_Power;
            break;
        case "Shell V-Power Diesel" : 
            $harga = $shell->Shell_V_Power_Diesel;
            break;
        case "Shell V-Power Nitro" : 
            $harga = $shell->Shell_V_Power_Nitro;
            break;
        default : 
            $harga = 0;
            break;
    }
    echo "
    <style>
    .cetak{
        margin:auto;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;n
        width: max-content;
        padding: 4px;
        margin-bottom: 100px;;
    }
    </style>
    ";
    echo $shell->hitung($harga,$jumlah);
}
