<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Furniture</title>
    <style>
        /* Gaya untuk card utama */
        .main-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk judul */
        .main-card h2 {
            margin-top: 0;
        }

        /* Gaya untuk daftar furniture dalam card */
        .furniture {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }

        /* Gaya untuk harga */
        .price {
            font-weight: bold;
        }

        /* Gaya untuk tipe */
        .type {
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>
<h2 style="text-align:center;">Daftar Furniture</h2>
    <div class="main-card">
        <?php
        $daftar_furniture = [
            [
                "nama" => "Drone",
                "harga" => 4000000,
                "tipe" => "rakitan"
            ],
            [
                "nama" => "Handphone",
                "harga" => 3200000,
                "tipe" => "nonrakitan"
            ],
            [
                "nama" => "Lego Starwars",
                "harga" => 200000,
                "tipe" => "rakitan"
            ],
            [
                "nama" => "Boneka Kotak",
                "harga" => 70000,
                "tipe" => "nonrakitan"
            ],
            [
                "nama" => "Laptop",
                "harga" => 9900000,
                "tipe" => "nonrakitan"
            ],
            [
                "nama" => "Komputer",
                "harga" => 200000000,
                "tipe" => "rakitan"
            ]
        ];

        foreach ($daftar_furniture as $furniture) {
            echo '<div class="furniture">';
            echo '<h3>' . $furniture['nama'] . '</h3>';
            echo '<p class="price">Harga: Rp. ' . number_format($furniture['harga']) . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="main-card">
        <h2>Form Pembelian</h2>
        <?php
        $barang_rakitan = isset($_POST["barang_rakitan"]) ? $_POST["barang_rakitan"] : "";
        $jumlah_rakitan = isset($_POST["jumlah_rakitan"]) ? $_POST["jumlah_rakitan"] : 0;
        $barang_nonrakitan = isset($_POST["barang_nonrakitan"]) ? $_POST["barang_nonrakitan"] : "";
        $jumlah_nonrakitan = isset($_POST["jumlah_nonrakitan"]) ? $_POST["jumlah_nonrakitan"] : 0;

        $total_harga_rakitan = 0;
        $total_harga_nonrakitan = 0;

        foreach ($daftar_furniture as $furniture) {
            if ($furniture["nama"] == $barang_rakitan) {
                $total_harga_rakitan = $furniture["harga"] * $jumlah_rakitan;
            }
            if ($furniture["nama"] == $barang_nonrakitan) {
                $total_harga_nonrakitan = $furniture["harga"] * $jumlah_nonrakitan;
            }
        }

        $total_harga_semua = $total_harga_rakitan + $total_harga_nonrakitan;

        ?>
        <form method="post" action="">
            <label for="barang_rakitan">Pilih Barang Rakitan:</label>
            <select name="barang_rakitan" id="barang_rakitan">
                <option value="">Pilih Furniture</option>
                <?php
                foreach ($daftar_furniture as $furniture) {
                    if ($furniture['tipe'] == 'rakitan') {
                        $selected = ($furniture['nama'] == $barang_rakitan) ? 'selected' : '';
                        echo '<option value="' . $furniture['nama'] . '" ' . $selected . '>' . $furniture['nama'] . '</option>';
                    }
                }
                ?>
            </select>
            <br>
            <label for="jumlah_rakitan">Jumlah Barang Rakitan:</label>
            <input type="number" name="jumlah_rakitan" id="jumlah_rakitan" value="<?php echo $jumlah_rakitan; ?>">
            <br>
            <label for="barang_nonrakitan">Pilih Barang Non-Rakitan:</label>
            <select name="barang_nonrakitan" id="barang_nonrakitan">
                <option value="">Pilih Furniture</option>
                <?php
                foreach ($daftar_furniture as $furniture) {
                    if ($furniture['tipe'] == 'nonrakitan') {
                        $selected = ($furniture['nama'] == $barang_nonrakitan) ? 'selected' : '';
                        echo '<option value="' . $furniture['nama'] . '" ' . $selected . '>' . $furniture['nama'] . '</option>';
                    }
                }
                ?>
            </select>
            <br>
            <label for="jumlah_nonrakitan">Jumlah Barang Non-Rakitan:</label>
            <input type="number" name="jumlah_nonrakitan" id="jumlah_nonrakitan" value="<?php echo $jumlah_nonrakitan; ?>">
            <br>
            <input type="submit" value="Beli">
        </form>

        <?php
        if ($total_harga_semua > 0) {
            echo '<h3>Hasil Pembelian:</h3>';
            echo '<p>Total Harga Barang Rakitan: Rp. ' . number_format($total_harga_rakitan) . '</p>';
            echo '<p>Total Harga Barang Non-Rakitan: Rp. ' . number_format($total_harga_nonrakitan) . '</p>';
            echo '<p>Total Harga Semua Barang: Rp. ' . number_format($total_harga_semua) . '</p>';
        }
        ?>
    </div>
</body>
</html>
