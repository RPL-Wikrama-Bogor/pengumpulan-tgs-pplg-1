<?php

class Shell
{
    protected $jenis;
    protected $ppn;
    public $jmlLiter;
    public $harga;

    public function __construct($harga, $jmlLiter, $ppn)
    {
        $this->harga = $harga;
        $this->ppn = $ppn;
        $this->jmlLiter = $jmlLiter;
    }
}

class Beli extends Shell
{

    public function pajak()
    {
        $pajak = $this->harga * $this->jmlLiter * $this->ppn;
        return $pajak;
    }

    public function totalHarga()
    {
        $total = $this->harga * $this->jmlLiter + ($this->harga * $this->jmlLiter * $this->ppn);
        return $total;
    }
}


$dataHarga =
    [
        'Super' => 15420,
        'V-Power' => 16130,
        'V-Power Diesel' => 18310,
        'V-Power Nitro' => 16510
    ];

$pilih = "";
$liter = "";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        <label for="">jenis bbm</label>
        <select name="pilih" id=""><?php foreach ($dataHarga as $key => $harga) {
                                        echo "<option value = '$key'>" . $key . " = " . $harga . "</option>";
                                    } ?></select>

        <br>
        <label for="">jumlah liter</label>
        <input type="number" name="liter" id=""><br>
        <input type="submit" name="submit">
    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pilih = $_POST['pilih'];
    $liter = $_POST['liter'];

    if (isset($dataHarga[$pilih]) && is_numeric($liter) && $liter > 0) {
        $jenis = $dataHarga[$pilih];
        $req = new Beli($jenis, $liter, 0.1);
        $pajak = $req->pajak();
        $total = $req->totalharga();
        echo "Anda membeli bahan bakar minyak tipe " . $jenis;
        echo "<br>";
        echo "dengan jumlah : " . $liter;
        echo "<br>";
        echo "pajak nya : " . $pajak;
        echo "<br>";
        echo "total yang harus anda bayar : " . $total;
    }
}

?>