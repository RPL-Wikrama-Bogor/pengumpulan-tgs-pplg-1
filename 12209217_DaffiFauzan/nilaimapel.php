<style>
    label{
        color: #4477CE;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai Siswa</title>
</head>
<body>
    <center>
    <h1>Menentukan Nilai <label>Mapel</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>PABP</td>
                <td>:</td>
                <td><input type="number" name="pabp"></td>
            </tr>
            <tr>
                <td>MTK</td>
                <td>:</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>DPK</td>
                <td>:</td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    
    <?php
    
    if (isset($_POST['submit'])) {
        $pabp = $_POST['pabp'];
        $mtk = $_POST['mtk'];
        $dpk = $_POST['dpk'];

        $rata = ($pabp + $mtk + $dpk) / 3;

        echo "Rata - Rata Nilai = $rata <br>";
    
        if ($rata <= 100 && $rata >= 80) {
            echo "Grade A";
        }
        else if ($rata <= 80 && $rata >= 75) {
            echo "Grade B";
        }
        else if ($rata <= 75 && $rata >= 65) {
            echo "Grade C";
        }
        else if ($rata <= 65 && $rata >= 45) {
            echo "Grade D";
        }
        else if ($rata <= 45 && $rata >= 0) {
            echo "Grade E";
        }
        else {
            echo "Angka tidak memenuhi persyaratan";
        }
    }
    
    ?>
    </center>
</body>