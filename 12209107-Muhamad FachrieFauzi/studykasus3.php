<?php
$barang = [
    [
        "nama" => "Kentang",
        "harga" => 12000,
        "status" => "diskon",
    ],

    [
        "nama" => "Salad",
        "harga" => 15000,
        "status" => "diskon",
    ],

    [
        "nama" => "Pisang",
        "harga" => 21000,
        "status" => "diskon",
    ],
    [
        "nama" => "Bunga",
        "harga" => 27000,
    ],
    [
        "nama" => "Daging",
        "harga" => 51000,
    ],
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <h4>Klik disini untuk daftar item diskon:</h4>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                foreach ($barang as $jual => $key) {
                    echo $key["nama"] . " - Rp" . $key["harga"] . "<br>"; 
                }
            };
        ?><hr><br>
        <form action="" method="get">
        <h4>Klik disini untuk mencari item:</h4>
            <input type="text" name="search" id="search">
        </form>
    </div>
    
</body>

<?php
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $nama = array_search($search, array_column($barang, 'nama'));
    // echo $nama;
    if($nama !== false && isset($barang[$nama]['status'])) {
        echo $barang[$nama]['nama'];
        echo $barang[$nama]['harga'];
      }
      else {
        echo "Barang $search tidak didiskon";
      }
}
?>

</html>