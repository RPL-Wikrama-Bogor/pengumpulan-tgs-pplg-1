<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
      color: #343a40;
    }

    form {
      background-color: #EDB7ED;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      font-size: 14px;
      margin-bottom: 15px;
    }

    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<form method="post">
<h1>Lkpd Algoritma 17</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bilangan_terbesar = PHP_INT_MIN;
            $bilangan_terkecil = PHP_INT_MAX;
            $jumlah_bilangan = 0;
            $total_bilangan = 0;

            for ($i = 1; $i <= 20; $i++) {
                $input_name = "bilangan$i";
                $bilangan = (int)$_POST[$input_name];
                $total_bilangan += $bilangan;
                $jumlah_bilangan++;

                if ($bilangan > $bilangan_terbesar) {
                    $bilangan_terbesar = $bilangan;
                }

                if ($bilangan < $bilangan_terkecil) {
                    $bilangan_terkecil = $bilangan;
                }
            }

            $rata_rata = $total_bilangan / $jumlah_bilangan;

            echo "Bilangan terbesar: $bilangan_terbesar<br>";
            echo "Bilangan terkecil: $bilangan_terkecil<br>";
            echo "Rata-rata: $rata_rata<br>";
        }
        ?>

        <p>Masukkan 20 bilangan:</p>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<input type='number' name='bilangan$i' required><br>";
        }
        ?>

        <br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>