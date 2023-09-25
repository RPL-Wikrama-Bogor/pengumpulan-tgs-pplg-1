<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
            background-color: #96B6C5;
        }

        .card {
            border: 0px;
            width: 500px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #ADC4CE;
            shadow: 15px;
        
        }
        
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 15px;
        }


        button {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
        }

        h2 {
            color: #102C57;
        }

        label {
            font-size: 20px;
        }
 </style>
<body>
    <form method="post" action="18_action.php">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<h3>Data Siswa ke-$i</h3>";
            echo "Nilai MTK: <input type='number' name='mtk[]' required><br>";
            echo "Nilai INDO: <input type='number' name='indo[]' required><br>";
            echo "Nilai INGG: <input type='number' name='ingg[]' required><br>";
            echo "Nilai DPK: <input type='number' name='dpk[]' required><br>";
            echo "Nilai Agama: <input type='number' name='agama[]' required><br>";
            echo "Kehadiran (%): <input type='number' name='kehadiran[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
    </form>
</body>
</html>
