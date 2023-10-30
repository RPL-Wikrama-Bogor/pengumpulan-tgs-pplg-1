<?php

$list_barang = [
    // Barang Rumah tangga
    [
        "barang" => "Sapu",
        "harga" => 30000,
        "tipe" => "diskon",
        "status" => "list-1",
    ],
    [
        "barang" => "kemoceng",
        "harga" => 15000,
        "tipe" => "nondiskon",
        "status" => "list-1",
    ],
    [
        "barang" => "kanebo",
        "harga" => 27000,
        "tipe" => "diskon",
        "status" => "list-1",
    ],
    // barang keperluan bayi 
    [
        "barang" => "troli",
        "harga" => 487000,
        "tipe" => "nondiskon",
        "status" => "list-2",
    ],
    [
        "barang" => "dot bayi",
        "harga" => 50000,
        "tipe" => "nondiskon",
        "status" => "list-2",
    ],
    [
        "barang" => "ranjang bayi",
        "harga" => 450000,
        "tipe" => "diskon",
        "status" => "list-2",
    ],
    // barang keperluan dapur
    [
        "barang" => "Sponge",
        "harga" => 25000,
        "tipe" => "nondiskon",
        "status" => "list-3",
    ],
    [
        "barang" => "Sunlight",
        "harga" => 45000,
        "tipe" => "diskon",
        "status" => "list-3",
    ],
    [
        "barang" => "wadah",
        "harga" => 3000,
        "tipe" => "diskon",
        "status" => "list-3",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <button name="submit">Barang Rumah tangga</button>
    <button name="submit2">Barang Keperlaun Bayi</button>
    <button name="submit3">Barang Keperlaun Dapur</button>
</form>



</body>
</html>

<?php
if(isset($_POST['submit'])){
    foreach ($list_barang as $list){
        if($list["status"] == "list-1"){
            echo "barang: ". $list["barang"] ."</br>";
            echo "harga: ". $list["harga"] ."</br>";
            echo"</br>";
        }
    }
}
if(isset($_POST['submit2'])){
    foreach ($list_barang as $list){

        if($list["status"] == "list-2"){
            echo "barang: ". $list["barang"] ."</br>";
            echo "harga: ". $list["harga"] ."</br>";
            echo"</br>";
        }
    }
}
if(isset($_POST['submit3'])){
    foreach ($list_barang as $list){
        if($list["status"] == "list-3"){
            echo "barang: ". $list["barang"] ."</br>";
            echo "harga: ". $list["harga"] ."</br>";
            echo"</br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <label for="keyword">Masukkan Data yang Akan Dicari:</label>
    <input type="text" name="nama_barang">
    <input type="submit" name="search">
</form>
    
</body>
</html>

<?php
if(isset($_POST['search'])){
    $search = $_POST['nama_barang'];
    // echo $search;
    $barang = array_search($search, array_column($list_barang, 'barang'));
    // echo $barang . "barang";
    if($barang && isset($list_barang[$barang]['tipe']) && $list_barang[$barang]['tipe'] == "diskon")  {
        echo $list_barang[$barang]['barang'];
        echo $list_barang[$barang]['harga'];
        echo $list_barang[$barang]['tipe'];
      }
      else {
        echo "Barang $search tidak didiskon";
    }
}
?>
