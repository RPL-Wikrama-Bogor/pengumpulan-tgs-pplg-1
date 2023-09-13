<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Juara Kelas</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #e0f2fe;

    }

    .container {
        width: 550px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f3e8ff;
        border-radius: 50px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        margin-bottom: 20px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 500px;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #f778b8;
        border-radius: 8px;
    }

    button{
        
        display: inline-block;
        padding: 2px 8px;
        color: white;
        opacity: 0.8;
        border: 1px solid #f778b8;
        border-radius: 4px;
        background-color: #f778b8;
        cursor: pointer;
        box-shadow: 0 5px #e04893;
    }

    button:hover {
        background-color: #f9a8d4;
        box-shadow: 0 5px #f9a8d4;
        color: black;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pencarian Juara Kelas</h1>
        
        <form method="post">
            <label for="num_mtk">Nilai Matematika:</label>
            <input type="number" id="num_mtk" name="mtk" min="0" max="100" required>
            <label for="num_indo">Nilai Bahasa Indonesia:</label>
            <input type="number" id="num_indo" name="indo" min="0" max="100" required>
            <label for="num_ingg">Nilai Bahasa Inggris:</label>
            <input type="number" id="num_ingg" name="ingg" min="0" max="100" required>
            <label for="num_dpk">Nilai Desain dan Pengkodean:</label>
            <input type="number" id="num_dpk" name="dpk" min="0" max="100" required>
            <label for="num_agama">Nilai Agama:</label>
            <input type="number" id="num_agama" name="agama" min="0" max="100" required>
            <label for="kehadiran">Persentase Kehadiran (%):</label>
            <input type="number" id="kehadiran" name="kehadiran" min="0" max="100" required>
            <button type="submit">Cek</button>
        </form>
        
        <?php
        if(isset($_POST['mtk']) && isset($_POST['indo']) && isset($_POST['ingg']) && isset($_POST['dpk']) && isset($_POST['agama']) && isset($_POST['kehadiran'])) {
            $nilai_mtk = intval($_POST['mtk']);
            $nilai_indo = intval($_POST['indo']);
            $nilai_ingg = intval($_POST['ingg']);
            $nilai_dpk = intval($_POST['dpk']);
            $nilai_agama = intval($_POST['agama']);
            $kehadiran = intval($_POST['kehadiran']);
            
            $total_nilai = $nilai_mtk + $nilai_indo + $nilai_ingg + $nilai_dpk + $nilai_agama;
            
            if ($total_nilai >= 475 && $kehadiran == 100) {
                echo "<p>Selamat! Anda adalah juara kelas.</p>";
            } else {
                echo "<p>Maaf, Anda belum memenuhi syarat untuk menjadi juara kelas.</p>";
            }
        }
        ?>
    </div>
</body>
</html>