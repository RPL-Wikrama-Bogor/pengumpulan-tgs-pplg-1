<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
     <style>
     /* Reset default margin and padding */
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
     @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

     * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
     }

     body {
          background-image: url();
          background-size: cover;
          font-family: Arial, sans-serif;
          background-color: #A0C49D ;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          margin: 0;
          font-family: "Poppins", sans-serif;
     }

     .title {
          margin: 10%;
          width: 100%;
          max-width: 400px;
          font-size: 4rem;
          text-align: center;
     }

     .card {
          width: 100%;
          max-width: 800px;
          padding: 2rem 1rem 1.5rem;

          border-radius: 1rem;
          border: 0px solid transparent;

          backdrop-filter: blur(2rem);
          box-shadow: 1.3rem 1.3rem 1.3rem rgba(0, 0, 0, 0.7);

          border-top-color: rgba(225, 225, 225, 0.1);
          border-left-color: rgba(225, 225, 225, 0.1);
          border-bottom-color: rgba(225, 225, 225, 0.1);
          border-right-color: rgba(225, 225, 225, 0.1);
     }

     .container {
          max-width: 500px;
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
     }


     h1 {
          text-align: center;
          margin-bottom: 20px;
          color: black;
     }

     form {
          text-align: center;
     }

     label {
          display: block;
          margin-bottom: 10px;
          color: black;
          font-size: 1rem;
          font-weight: bold;
     }

     input {
          width: 100%;
          padding: 10px;
          margin-bottom: 20px;
          border: 1px solid #ccc;
          border-radius: 3px;
     }

     button {
          padding: 10px 20px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 3px;
          cursor: pointer;
          transition: background-color 0.3s;
     }

     button:hover {
          background-color: #0056b3;
     }

     .result {
          margin-top: 20px;
          padding: 10px;
          background-color: #f9f9f9;
          border: 1px solid #ddd;
          border-radius: 3px;
     }

     .result p {
          margin-bottom: 5px;
          color: #333;
     }

     .error {
          color: #ff4c4c;
     }

     .button-area button {
          color: #7C9D96;
          border: none;
          outline: none;
          font-size: 1.1rem;
          cursor: pointer;
          border-radius: 10px;
          padding: 13px 25px;
          background: #183D3D;
          box-shadow: 0px 5px 10px black;
          transition: 0.3s ease;
          font-family: "Poppins", sans-serif;
     }

     .button-area button:hover {
          background: black;
     }

     .button-area span {
          font-size: 17px;
          padding: 5rem;
          display: none;
     }

     .button-area button:hover i {
          left: 8px;
     }
     </style>
     <title>Informasi Pegawai</title>
</head>

<body>
     <div class="position-absolute top-50 start-50 translate-middle">
          <div class="cb1 card" style="width: 30rem;">
               <div class="card-body">
                    <h1>Informasi Pegawai</h1>
                    <form action="" method="post">
                         <label for="employeeCode">Kode Pegawai:</label>
                         <input type="text" id="employeeCode" name="employeeCode" required
                              placeholder=" Contoh : 32205199505">
                         <!-- Contoh nilai default: golongan 3, tanggal 22, bulan 05, tahun 1995, nomor urut 05 -->
                         <div class="button-area">
                              <button type="submit">
                                   Submit <i class="ri-send-plane-fill"></i>
                              </button>
                         </div>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         $employeeCode = $_POST["employeeCode"];
                         if (strlen($employeeCode) == 11) {
                              $golongan = $employeeCode[0];
                              $tanggal = substr($employeeCode, 1, 2);
                              $bulan = substr($employeeCode, 3, 2);
                              $tahun = substr($employeeCode, 5, 4);
                              $nomorUrut = substr($employeeCode, 9, 2);

                              $bulanArr = [
                                   "01" => "JANUARI", "02" => "FEBRUARI", "03" => "MARET", "04" => "APRIL",
                                   "05" => "MEI", "06" => "JUNI", "07" => "JULI", "08" => "AGUSTUS",
                                   "09" => "SEPTEMBER", "10" => "OKTOBER", "11" => "NOVEMBER", "12" => "DESEMBER"
                              ];

                              // Cek apakah kunci array bulan tersedia sebelum mengakses
                              $bulanText = isset($bulanArr[$bulan]) ? $bulanArr[$bulan] : "BULAN TIDAK VALID";

                              echo "<div class='result'>";
                              echo "<h2>Hasil:</h2>";
                              echo "<p>Nomor Golongan: $golongan</p>";
                              echo "<p>Tanggal Lahir: $tanggal $bulanText $tahun</p>";
                              echo "<p>Nomor Urut: $nomorUrut</p>";
                              echo "</div>";
                         } else {
                              echo "<p class='error'>Kode Pegawai harus terdiri dari 11 digit.</p>";
                         }
                    }
                    ?>
               </div>
          </div>
     </div>
</body>

</html>