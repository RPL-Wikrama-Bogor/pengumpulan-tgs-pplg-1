<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juara Kelas</title>
</head>
<body>
    <?php  for($i = 1; $i <= 2; $i++) { ?>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama[]"></td>
                <tr>
                    <td>Nilai MTK</td>
                    <td><input type="number" name="mtk[]"></td>
                </tr>
                <tr>
                    <td>Nilai Indo</td>
                    <td><input type="number" name="indo[]"></td>
                </tr>
                <tr>
                    <td>Nilai Inggris</td>
                    <td><input type="number" name="ingg[]"></td>
                </tr>
                <tr>
                    <td>Nilai DPK</td>
                    <td><input type="number" name="dpk[]"></td>
                </tr>
                <tr>
                    <td>Nilai Agama</td>
                    <td><input type="number" name="agama[]"></td><br>
                </tr>
                <tr>
                    <td>Kehadiran</td>
                    <td><input type="number" name="kehadiran[]"></td><br>
                </tr>
                <?php } ?>
                <tr>
                    <td><input type="submit" value="Cari Juara" name="submit"></td>
                </tr>
            </form>   
        </table>
</body>

<?php

        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $mtk = $_POST['mtk'];
            $indo = $_POST['indo'];
            $ingg = $_POST['ingg'];
            $dpk = $_POST['dpk'];
            $agama = $_POST['agama'];
            $kehadiran = $_POST['kehadiran'];


            for($i = 0; $i < 2; $i++){
                $total_nilai[$i] = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];

               if($total_nilai[$i] >= 475 && $kehadiran[$i] == 100){
                    $juara_kelas[] = $nama[$i] . "<br>";
                } 
            }

            
            if(count($juara_kelas) > 0){
                echo "Juara Kelas : <br>";
                foreach($juara_kelas as $qualified){
                    echo $qualified;
                }
            }else{
                echo "Tidak ada juara kelas! (Tidak memenuhi syarat)";
            }
            
        }

?>

</html>