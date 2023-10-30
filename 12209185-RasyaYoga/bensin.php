<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
        <form action="" method="post">
                <b>Jumlah Liter</b>
                <input type="number" name="liter">
              <br>

<b>tipe bahan bakar</b>
                    <select name="bahanBakar">
                        <option hidden>-----------Pilih-----------</option>
                        <option value="Shell Super">Super Shell</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                    </select>
                <button type="submit" name="button">Beli</button>
        </form>
</body>
</html>

<?php

class Shell{
    
    public  $Shell_super = 15420,
            $Shell_V_Power = 16130,
            $Shell_V_Power_Diesel = 18310,
            $Shell_V_Power_Nitro = 16510;

    public $PPN =10/100;

}
class Beli extends Shell{
    public function hitung($harga, $jumlah)
    {
        $hAkhir = $harga * $jumlah + ($harga * $jumlah * $this->PPN);
        echo "Anda Membeli Bahan Bakar Minyak : ". $_POST['bahanBakar'] . "<br>";
        echo "Dengan Jumlah : $jumlah Liter<br>";
        echo "Total Yang Harus Anda bayar : Rp." . number_format($hAkhir, 0, ',', '.'). ",-";
    }
}
if(isset($_POST['button'])){
    $shell = new Beli();
    $bahanBakar = $_POST['bahanBakar'];
    $jumlah = $_POST['liter'];

    switch($bahanBakar){
        case "Shell Super" : 
            $harga = $shell->Shell_super;
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
    echo $shell->hitung($harga, $jumlah);
}