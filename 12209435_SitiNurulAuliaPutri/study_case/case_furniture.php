<?php
$listbarang = [
    [
        "nama" => "Rak Piring ( 1000cm x 200cm )",
        "harga" => 300000,
        "tipe" => "non_rakitan"
    ],
    [
        "nama" => "Kursi",
        "harga" => 50000,
        "tipe" => "non_rakitan"
    ],
    [
        "nama" => "Meja lipat",
        "harga" => 100000,
        "tipe" => "non_rakitan"
    ],
    [
        "nama" => "Meja belajar ( 500cm x 200cm )",
        "harga" => 300000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Lemari ( 1000cm x 2000cm )",
        "harga" => 600000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Divan kasur ( 1000cm x 400cm )",
        "harga" => 700000,
        "tipe" => "rakitan"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Furniture</title>
</head>
<body>
    <h3>Daftar Furniture Toko Hao</h3>

    <ol>
        <?php foreach($listbarang as $barang):?>
        <li>
            Nama barang : <?="<b>" . $barang['nama'] . "</b>";?>
            <br>
            Harga : <?= "<b>" . $barang['harga'] . "</b>";?>
        </li>
        <?php endforeach; ?>
    </ol> <br>


    <form action="" method="post" >
            <table >
            <!-- /rakitan -->
                <tr>
                    <td>Input barang rakitan : </td>
                    <td>    
                        <select name="rakitan">
                            <option disabled selected>- Pilih Barang -</option>
                            <!-- option disabled selected -->
                                <?php
                                foreach ($listbarang as $key => $barang ):
                                    if($barang["tipe"] == "rakitan"):
                                ?>
                                <option value="<?= $key ?>"> <?= $barang["nama"]; ?></option>
                                <?php 
                                    endif; 
                                endforeach; 
                                ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Input quantity barang rakitan : </td>
                    <td><input type="number" name="rakitanQuantity"></td>
                </tr>

            <!-- /non rakitan -->
                <tr>
                    <td>Input barang non rakitan : </td>
                    <td>    
                        <select name="non_rakitan">
                        <option disabled selected>- Pilih Barang -</option>
                            <!-- option disabled selected -->
                                <?php foreach ($listbarang as $key => $barang ):
                                        if($barang["tipe"] == "non_rakitan"): ?>
                                    <option value="<?= $key ?>"> <?= $barang["nama"]; ?></option>
                                <?php 
                                    endif; 
                                    endforeach; 
                                ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Input quantity barang non rakitan : </td>
                    <td><input type="number" name="non_rakitanQuantity"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>

</body>
</html>

<?php

    if(isset($_POST['submit'])){
        if(isset($_POST['rakitan'])){
            $rakitan = $_POST['rakitan'];
            $jumlahRakitan = $_POST['rakitanQuantity'];

            $namaRakitan = $listbarang[$rakitan]["nama"];
            $hargaRakitan = $listbarang[$rakitan]["harga"];   
            
            $totalRakitan = $hargaRakitan * $jumlahRakitan;
        }else{
            $rakitan ="NULL";
            $namaRakitan = 0;
            $jumlahRakitan = 0;
            $hargaRakitan = 0;
            $totalRakitan = 0;
        }
        echo "<h3> <b> Bill Furniture Hao </b> </h3> <br>";
        echo "Barang rakitan : <b> " . $namaRakitan . "</b> <br>";
        echo "Quantity barang rakitan : <b>" . $jumlahRakitan . "</b> <br>" ;
        echo "Total harga barang rakitan : <b>" . number_format($totalRakitan, 0, " ", ".") . "</b> <br>";
        echo "<br>";
        

        if(isset($_POST['non_rakitan'])){
            $non_rakitan = $_POST['non_rakitan'];
            $jumlahNon_rakitan = $_POST['non_rakitanQuantity'];

            $namaNon_rakitan = $listbarang[$non_rakitan]['nama'];
            $hargaNon_rakitan = $listbarang[$non_rakitan]['harga'];   
            
            $totalNon_rakitan = $hargaNon_rakitan * $jumlahNon_rakitan;
        }else{
            $non_rakitan ="NULL";
            $namaNon_rakitan = 0;
            $jumlahNon_rakitan = 0;
            $hargaNon_rakitan = 0;
            $totalNon_rakitan = 0;
        }

        $total = $totalRakitan + $totalNon_rakitan;

        echo "Barang non-rakitan : <b> " . $namaNon_rakitan . "</b> <br>";
        echo "Quantity barang non-rakitan : <b>" . $jumlahNon_rakitan . "</b> </br>";
        echo "Total harga barang non-rakitan : <b>" . number_format($totalNon_rakitan, 0, " ", ".") . "</b> <br>";
        echo "<br>";

        echo "Total harga yang harus di bayar adalah <b>" . number_format($total, 0, " ", ".") . "</b> <br>";
    }
?>