<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
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

<div class="card">

    <h1>Lkpd Algoritma 18</h1>
    <form method="post" action="">      
        <table>
        <input type="text" name="nama" placeholder="Nama Siswa" required>
        <input type="number" name="mtk"  placeholder="Nilai Mtk" required>
        <input type="number" name="indo"  placeholder="Nilai Indo" required>
        <input type="number" name="ingg"  placeholder="Nilai Inggris" required>
        <input type="number" name="dpk"  placeholder="NIlai Dpk" required>
        <input type="number" name="agama"  placeholder="Niali Pabp" required>
        <input type="number" name="kehadiran"  placeholder="Kehadiaran (Dalam Persen)" required>

        <input type="submit" name="submit" value="Cari Juara">
        </table>
    </form>
</div>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mtk = intval($_POST['mtk']);
        $indo = intval($_POST['indo']);
        $ingg = intval($_POST['ingg']);
        $dpk = intval($_POST['dpk']);
        $agama = intval($_POST['agama']);
        $kehadiran = intval($_POST['kehadiran']);

        $total_nilai = $mtk + $indo + $ingg + $dpk + $agama;
        $nilai_rata_rata = $total_nilai / 5;

        if ($nilai_rata_rata >= 95 && $kehadiran == 100) {
            echo "<p>Selamat kepada $nama, Anda adalah juara kelas!</p>";
        } else {
            echo "<p>Maaf, $nama belum memenuhi syarat menjadi juara kelas.</p>";
        }
    }
    ?>
</body>