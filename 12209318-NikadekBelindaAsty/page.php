<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .administator button {
            display: inline-block;
            padding: 3px 10px;
            color: black;
            margin-top: 5px;
            font-weight: bold;
            opacity: 0.8;
            border: 1px solid #facc15;
            border-radius: 10px;
            background-color: #facc15;
            cursor: pointer;
            box-shadow: 0 5px #facc15;
            margin-left: 1500px;

        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 25px;
            margin-left: 30px;
            margin-right: 40px;
            margin-bottom: 20px;
        }

        .text {
            flex: 1;
            padding-right: 20px;
            font-size: 20px;
        }

        .foto img {
            width: 100%;
            max-width: 700px;
        }

        .kolom{
            width: 400px;
            height: 100px;
            background-color: #fde047;
            margin: 3px;
            box-sizing: border-box;
            padding: 15px;
            color: black;
            font-weight: bold;
            text-align: center;
        }

        .kolom1,.kolom2, .kolom3, .kolom4{
            float: left;
        }

        .artikel {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 40%;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            float: right;
            margin-right: 100px;
        }

        .artikel table {
            width: 100%;
            border-collapse: collapse;
        }

        .artikel th, .artikel td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .artikel th {
            background-color: #f5f5f5;
            font-weight: bold;
            text-align: center;
        }

        .artikel td img {
            width: 200px;
            height: auto;
            float: left;
            margin-right: 10px;
            border-radius: 5px;
        }

        .artikel .tanggal {
            font-size: 12px;
            color: #888;
            text-align: right;
        }


        .isi {
            background-color: #f5f5f5;
            padding: 40px;
            border-radius: 8px;
            width: 700px;
            margin-top : 150px;
            margin-left: 10px;
            margin-bottom: 20px;
        }

        .isi h2{
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 700px;
        }

        table td {
            padding: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            background-color: white;
            border: 1px solid white;
            border-radius: 4px;
        }

        .isi button {
            display: inline-block;
            padding: 3px 10px;
            color: black;
            font-weight: bold;
            opacity: 0.8;
            border: 1px solid #facc15;
            border-radius: 10px;
            background-color: #facc15;
            cursor: pointer;
            box-shadow: 0 5px #facc15;
            float: right;
        }

        footer {
            background-color: #fde047;
            text-align: center;
            padding: 10px 0;
        }

        @media screen and (max-width: 768px) {

            .administator button {
              margin-left: 450px;
            }

            .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .text {
                width: 90%;
                font-size: 18px;
                padding-right: 0;
                margin-bottom: 20px;
            }

            .foto img {
                max-width: 100%;
            }

            .kolom{
                width: 500px;
                height: 100px;
                background-color: #fde047;
                margin: 3px;
                box-sizing: border-box;
                padding: 15px;
                color: black;
                font-weight: bold;
                text-align: center;
                margin-left: 25px;
            }

            .kolom1,.kolom2, .kolom3, .kolom4{
                float: left;
            }

            .kolom4{
                margin-bottom: 25px;
            }


            .artikel {
                width: 500px;
                margin-right: 5px;
                float: none;
            }
            
            .artikel td img {
                max-width: 100%;
                float: none;
                margin-right: 0;
            }

            table {
                width: 100%; 
            }

            .isi {
                width: 480px;
                margin-left: 0;
                padding: 20px;
                margin-top: 20px; 
                margin-left: 10px;
                margin-right: 10px;
                margin-bottom: 10px; 
            }

            .isi h2 {
                font-size: 24px; 
            }

            .isi button {
                display: block; 
                width: 100%; 
                margin: 10px auto; 
                float: none; 
            }

            input, textarea {
                width: 300px;
                padding: 10px;
                background-color: white;
                border: 1px solid white;
                border-radius: 4px;
            }

        }
    
        @media (max-width: 576px) {
            .text {
                font-size: 16px;
            }
        } 
    </style>
</head>
<body>
    <div class="administator">
        <button type="submit" name="submit">
          Adminstator
        </button>
    </div>
    <div class="container">
            <div class="text">
                <h1>Pengaduan Masyarakat</h1>
                <ol>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</li>
                    <li>Enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
                    <li>Nisi ut aliquid ex ea commodi consequatur.</li>
                </ol>
            </div>
            <div class="foto">
                <img src="img/lorem.png" alt="Foto">
            </div>
    </div>
    <section class="baris flex-container">
        <div class="kolom kolom1">
            <p>Jumlah Kecamatan</p>
            <p>15</p>
        </div>
        <div class="kolom kolom2">
            <p>Jumlah Desa</p>
            <p>42</p>
        </div>
        <div class="kolom kolom3">
            <p>Jumlah Penduduk</p>
            <p>12.000</p>
        </div>
        <div class="kolom kolom4">
            <p>Data Per Tahun</p>
            <p>2023</p>
        </div>
   </section> 
   <div class="artikel">
    <table>
        <tr>
            <th>Laporan Pengaduan</th>
        </tr>
        <tr>
            <td>
                <div class="konten">
                    <div class="tanggal">22 Juni 2022 : Fema Flamelina Putri</div>
                    <div class="gambar">
                        <img src="img/jalan.png" alt="Gambar Pengaduan">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="konten">
                    <div class="tanggal">22 Juni 2022 : John Doe</div>
                    <div class="gambar">
                        <img src="img/jalan.png" alt="Gambar Pengaduan">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                </div>
            </td>
        </tr>
    </table>
</div>
   <div class="isi">
    <form action="" method="post">
            <table>
            <h2>Buat pengaduan</h2>
                <tr>
                    <td>NIK : </td>
                    <td></td>
                    <td><input type="number" name="nik"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap : </td>
                    <td></td>
                    <td><input type="string" name="nama"></td>
                </tr>
                <tr>
                    <td>No Telp : </td>
                    <td></td>
                    <td><input type="number" name="telp"></td>
                </tr>
                <tr>
                    <td>Pengaduan : </td>
                    <td></td>
                    <td><input type="string" name="pengaduan"></td>
                </tr>
                <tr>
                    <td>Upload Gambar Terkait: </td>
                    <td></td>
                    <td><input type="file" name="gambar"></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">
                    Kirim
                </button></td>
                </tr>
            </table><br>
        </form>
    </div> 
    <footer>
      &copy; 2023 Your Website Name
    </footer>

</body>
</html>