<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Landing Page</title>
  </head>
  <body>
    <header>
      <button class="admin-button">Administrator</button>
    </header>
    <section class="hero-section">
      <div class="hero-content">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, iste unde sunt fugiat voluptate vero harum velit nostrum? Enim voluptatem eaque necessitatibus adipisci provident culpa molestias corrupti, maxime nesciunt
          molestiae.
        </p>
      </div>
      <div class="hero-image">
        <img src="assets/img-5.jpeg" alt="">
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

          <input type="submit" value="Submit" />
        </form>
      </div>
      <div class="hero-image">
        <div class="report-box">
          <div class="report-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio</p>
          </div>
          <img class="report-image" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8MTYlM0E5fGVufDB8fDB8fHww&w=1000&q=80" alt="Hero Image"" alt="Gambar Laporan 1" />
        </div>

        <div class="report-box">
          <div class="report-content">
            <p>Phasellus nisl erat, dignissim vel malesuada at, semper eget ex. Phasellus nisl erat, dignissim vel malesuada at, semper eget ex</p>
          </div>
          <img class="report-image" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8MTYlM0E5fGVufDB8fDB8fHww&w=1000&q=80" alt="Hero Image"" alt="Gambar Laporan 2" />
        </div>
      </div>
    </section>
  </body>
</html>