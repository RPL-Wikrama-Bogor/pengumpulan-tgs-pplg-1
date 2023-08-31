<?php
$nilai_pai;
$nilai_mtk;
$nilai_dpk;
$rata_rata;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Rata Rata</title>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
    <label for="nilai_pai">Masukan Nilai PAI</label>
    <input type="number" name="nilai_pai" id="nilai_pai">
    </div>
    <div style="display: flex;">
    <label for="nilai_mtk">Masukan Nilai MTK</label>
    <input type="number" name="nilai_mtk" id="nilai_mtk">
</div>
    <div style="display: flex;">
    <label for="nilai_dpk">Masukan Nilai DPK</label>
    <input type="number" name="nilai_dpk" id="nilai_dpk">
</div>
    <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $nilai_pai = $_POST['nilai_pai'];
        $nilai_mtk = $_POST['nilai_mtk'];
        $nilai_dpk = $_POST['nilai_dpk'];

        $rata_rata = ($nilai_pai + $nilai_mtk + $nilai_dpk) / 3;

    if($rata_rata <= 100 && $rata_rata >= 80){
        echo "A";
    } else if ($rata_rata <= 80 && $rata_rata >= 75){
        echo "B";
    } else if ($rata_rata <= 75 && $rata_rata >=65){
        echo "C";
    } else if ($rata_rata <= 65 && $rata_rata >= 45){
        echo "D";
    } else if ($rata_rata <= 45 && $rata_rata >= 0){
        echo "E";
    } else {
        echo "angka tidak memenuhi persyaratan";
    }
    }