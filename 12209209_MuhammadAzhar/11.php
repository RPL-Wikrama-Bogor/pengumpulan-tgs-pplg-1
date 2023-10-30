<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
     <link rel="stylesheet" href="styles.css">
     <title>Informasi Pegawai</title>
</head>
<style>
    /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #A0C49D;
    font-family: "Poppins", sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    width: 100%;
    max-width: 800px;
    padding: 20px;
}

.card {
    padding: 1rem;
    border-radius: 1rem;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
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
    width: 100%;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button-area {
    text-align: center;
    margin-top: 20px;
}

.button-area button:hover {
    background-color: #0056b3;
}

/* Add media query for responsiveness */
@media screen and (max-width: 480px) {
    input,
    button {
        width: auto;
    }
}

</style>

<body>
     <div class="container">
          <div class="card">
               <div class="card-body">
                    <h1>Informasi Pegawai</h1>
                    <form action="" method="post">
                         <label for="employeeCode">Kode Pegawai:</label>
                         <input type="text" id="employeeCode" name="employeeCode" required placeholder="Contoh: 32205199505">
                         <div class="button-area">
                              <button type="submit">Submit <i class="ri-send-plane-fill"></i></button>
                         </div>
                    </form>
                    <?php
                    // PHP code remains unchanged
                    ?>
               </div>
          </div>
     </div>
</body>

</html>