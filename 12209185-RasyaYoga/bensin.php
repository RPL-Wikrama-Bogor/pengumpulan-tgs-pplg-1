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
                <td><input type="number" name="liter"></td>
                <br>

<b>tipe bahan bakar</b>
                <td>
                    <select name="bahanBakar">
                        <option hidden>-----------Pilih-----------</option>
                        <option value="Shell Super">Pertamax-turbo</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                    </select>
                    <br>
                    
                <button type="submit" name="button">Beli</button>
        </form>
</body>
</html>

<?php

class Shell{
    
    public  $Pertamax_turbo = 15000,
            $Shell_V_Power = 16130,
            $Shell_V_Power_Diesel = 18310,
            $Shell_V_Power_Nitro = 16510;

    public $PPN =10/100;

}
class Beli extends Shell{
    public function hitung($hrga, $jumlah)
    {
        $hAkhir = $hrga * $jumlah + ($hrga * $jumlah * $this->PPN);
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
            $hrga = $shell->Pertamax_turbo;
            break;
        case "Shell V-Power" : 
            $hrga = $shell->Shell_V_Power;
            break;
        case "Shell V-Power Diesel" : 
            $hrga = $shell->Shell_V_Power_Diesel;
            break;
        case "Shell V-Power Nitro" : 
            $hrga = $shell->Shell_V_Power_Nitro;
            break;
        default : 
            $hrga = 0;
            break;
    }
    echo $shell->hitung($hrga, $jumlah);
}