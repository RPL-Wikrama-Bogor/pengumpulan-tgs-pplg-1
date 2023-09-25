<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body> <h2>Hitung Nilai</h2>
    <form action="" method="post">
    <table>

    <h2>Kode Pegawai</h2>

<form method="post" action="#">
    <table>
        <tr>
            <td>Nama siswa</td>
            <td>  :  </td>
            <td><input type="number" name="sw"></td>
        </tr>
        <tr>
            <td>Data kehadiran</td>
            <td>  :  </td>
            <td><input type="number" name="kh"></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>  :  </td>
            <td><input type="number" name="in"></td>
        </tr>
        <tr>
            <td>Nilau Bahasa Inggris</td>
            <td>  :  </td>
            <td><input type="number" name="ing"></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>  :  </td>
            <td><input type="number" name="mt"></td>
        </tr>
        <tr>
            <td>Nilai DPK</td>
            <td>  :  </td>
            <td><input type="number" name="dp"></td>
        </tr>
        <tr>
            <td>Nilai Agama</td>
            <td>  :  </td>
            <td><input type="number" name="agm"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="kirim"></td>
        </tr>
    </table>
</form>


    <?php
     $nama;
     $kehadiran;
     $mtk;
     $pai;
     $dpk;
     $indo;
     $ing;
     
     $data_siswa=array(
     '$kehadiran',
     '$mtk',
     '$indo',
     '$ing',
     '$pai',
     '$dpk'
     );

     $data=array($data_siswa);
    
     count($data);
     
     if (isset($_POST['submit'])) {
        $no_pegawai = $_POST ['no_pegawai'];
        $length = strlen($no_pegawai);

     if(count($data) == 15){




     }
    }
    ?>
    </table>
</form>
</body>
</html>