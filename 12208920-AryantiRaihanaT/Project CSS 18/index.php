<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juara Kelas</title>
    <style>
        body{
            font-family:  'Poppins', sans-serif;
            background: #c6f592;
            padding:20px;
         
        }
        .form{
            background-color:#FFFFFF;
            height:1100px;
            width:350px;
            margin:50px auto 10px;
            box-shadow:0px 0px 10px 0px #FFFFFF;
            padding:20px;
            max-width:80%;
        }

        input[type=submit]{
            padding:8px 15px;
            border:none;
            border-radius:3px;
            background-color:#61677A;
            margin-top:50px;
            display:inline-block;
            color: #FFFFFF;
        }

        .tampil{
            color:#FFFFFF;
            background-color: #4a6729;
            width:300px;
            height:120px;
            margin:auto;
        }

        p{
            text-align:center;
            padding:10px;
        }

        @media (min-width: 576px){
            body{
                max-width:50%;
                margin:auto;
            }
        }


    </style>
</head>
<body>
    <div class="form">
    <h2>Mencari Juara Kelas</h2>    
    <?php for($i = 1; $i <= 3; $i++) { ?>
        <table> 
            <form action="" method="post">
                <br>
                <hr>
                <h3><?= "Data Siswa ke ". $i ?></h3>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama[]"></td>
                </tr>
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
        </div>

            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $mtk = $_POST['mtk'];
                    $indo = $_POST['indo'];
                    $ingg = $_POST['ingg'];
                    $dpk = $_POST['dpk'];
                    $agama = $_POST['agama'];
                    $kehadiran = $_POST['kehadiran'];


                    for($i = 0; $i < 3; $i++){
                        $total_nilai[$i] = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];

                    if($total_nilai[$i] >= 475 && $kehadiran[$i] == 100){
                            $juara_kelas[] = $nama[$i] . "<br>";
                        } 
                    }

                ?>
                <?php if(count($juara_kelas) > 0){ ?>
                            <?php foreach($juara_kelas as $qualified){ ?>
                            <div class="tampil">
                                <p><?= "Juara Kelas : <br>" . $qualified; ?></p>
                            </div>
                        <?php } ?>
                        <?php }else{ ?>
                            <div class="tampil">
                                <p><?= "Tidak ada juara kelas! (Tidak memenuhi syarat)"; ?></p>
                            </div>
                    <?php } ?>         
            <?php } ?>

</body>

</html>