<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ladingpage</title>
    <style>
        body {
            background-color: #F1F0E8;
        }
        .content{
            clear: right;
        }
        .button {
            float: right;
            background-color: #C4C1A4;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 50px;
        }
        .text {
            float: left;
            width: 50%;
        }
        .image{
            float: right;
            width: 50%;
        
        }
        img {
            width: 100%;
            border-radius: 10px;
            height: 390px;
           
        }
        .kotak {
            box-sizing: border-box;
			padding: 20px;
            display: inline-block;
            margin-left: -20px;
            
        }
        .kolom {
        width: 300px;
        height: 100px;
        background-color: #EADBC8;
        margin: 3px;
        box-sizing: border-box;
		padding: 10px;
        float: left;
        }
        .kotak1,.kotak2,.kotak3,.kotak4{
            text-align: center;
        }

        b {
            margin-left: 10rem;
        }
        input[type="text"]{
            width: 500px;
        }

        .catatan{
            height: 250px;
        }
    
        .formulir {
            background-color:#EADBC8;
            width: 510px;
            height: 520px;
            border-radius: 10px;
            padding: 10px;
            margin-top: -40px;
        }

        input[type="submit"]{
            margin-left: 90%;
        }

        @media (max-width: 768px) {
            .content {
                display: block;
                text-align: center;
            }

            .text, .image {
                width: 100%;
                float: none;
            }

            .kolom {
                width: 100%;
                float: none;
            }

            .formulir {
                width: 100%;
                margin-top: 20px;
            }
            
            input[type="submit"] {
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            input[type="text"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <a href="" class="button">Admin</a><br><br><br>
    <div class="content">
        <div class="text">
            <h1>WELCOME TO LANA WORLD </h1>
            <ol>
                  <p>Elizabeth Woolridge Grant, known professionally as Lana Del Rey, is an American singer-songwriter.
                   Her music is noted for its cinematic quality and exploration of tragic romance, glamour, and melancholia, with frequent references to contemporary pop culture and 1950s–1970s Americana.</p>
            </ol>
        </div>
        <div class="image">
            <img src="download (3).jpeg" alt=""/>
        </div>
    </div>
    <div class="kotak">
        <div class="kolom kotak1">Radio<br>lana</div>
        <div class="kolom kotak2">Black Beauty<br>lana</div>
        <div class="kolom kotak3">Young and Beautiful<br>lana</div>
        <div class="kolom kotak4">Born to die<br>lana</div>
    </div>
    <h3><center>Form Data Penggemar</center></h3>

    <div class="formulir">
        <b>Data Penggemar</b><br>
        <label for="nik">No urut :</label><br>
        <input type="text" name="nik" id="nik"><br>
        <label for="nama_lengkap">Nama Lengkap :</label><br>
        <input type="text" name="nama_lengkap" id="nama_lengkap"><br>
        <br>
        <label for="no_telp">No Telp :</label><br>
        <input type="text" name="no_telp" id="no_telp"><br>
        <br>
        <label for="pengaduan">Catatan :</label><br>
        <input type="text" class="catatan" name="catatan" id="catatan"><br>
        <label for="file">Upload Gambar</label><br>
        <input type="file">
        <button class="button" type="submit" name="submit">Kirim</button>   
    </div>
</body>
</html>