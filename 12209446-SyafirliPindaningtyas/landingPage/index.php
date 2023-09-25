<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>

<body>
    <header>
        <button class="admin-button">Administrator</button>
    </header>
    <section class="hero-section">
        <div class="hero-content">
            <h2>Pengaduan Masyarakat</h2>
            <ol>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum saepe nam similique quasi accusantium excepturi id, harum dolorum quia praesentium. Ullam vero libero pariatur laudantium itaque numquam. Mollitia, ipsa doloribus!</li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et id laborum saepe quia, ea facere dolore voluptatem suscipit eius vel hic nostrum natus perferendis nam. Quam iure officia reprehenderit unde.</li>
            </ol>
        </div>
        <div class="hero-image">
            <img src="img/aspirasi.png" alt="">
        </div>
    </section>
    <section class="box-section">
        <div class="box">jumlah Kecamatan <br>15</div>
        <div class="box">Jumlah Desa <br>42</div>
        <div class="box">Jumlah Penduduk <br>12000 </div>
        <div class="box">Data per tahun <br>2023 </div>
    </section>

    <section class="hero-section">
        <div class="hero-content">
            <form>
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" required />

                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required />

                <label for="notelp">No. Telp:</label>
                <input type="tel" id="notelp" name="notelp" required />

                <label for="pengaduan">Pengaduan:</label>
                <textarea id="pengaduan" name="pengaduan" rows="4" required></textarea>

                <label for="gambar">Upload Gambar:</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required />

                <input type="submit" value="Kirim" />
            </form>
        </div>
        <div class="hero-image">
            <h2>Laporan Pengaduan</h2></br>
            <div class="report-box">
                <div class="report-content">
                    <p> 22 Juni 2022 : Syafirli Pindaningtyas</p></br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio</p>
                </div>

                <img class="report-image" src="img/jalan.jpg" alt="Hero Image" alt="Gambar Laporan 1" />
            </div>

            <div class="report-box">
                <div class="report-content">
                    <p> 22 Juni 2022 : Syafirli Pindaningtyas</p></br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur soluta rerum est laborum quo consequatur praesentium accusamus</p>
                </div>

                <img class="report-image" src="img/jalan.jpg" alt="Hero Image" alt="Gambar Laporan 2" />
            </div>
        </div>
    </section>
    
    <div id="footer">
        <div class="container text-center">
            <div class="">
                <center>
                <p>Copyright &copy;<a>2023;</a></p>
                </center>
            </div>
        </div>
    </div>
</body>

</html>