<?php
    $hh = 0;
    $mm = 0;
    $ss = 0;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 12</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Quicksand";
}

.container{
    width: auto;
    max-width:97%;
    padding: 0% 1rem;
    justify-content: center;
    /* align-items: ; */
    text-align: center;
  }
  
  #main{
    border-radius: 1em;
    box-shadow: rgba(0, 0, 0, .1) -1;
    transition: all ease-in-out .3s;
    overflow: hidden;
    position: relative;
    background:#fff;
    min-height:86vh;
    z-index:-1;
    }

    h1{
        font-family:'Quicksand';
        margin-top: 100px;
        justify-content: center;
        text-align: center;
      }
      
      input[type=number] {
        width:500px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #555;
        outline: none;
      }

      input[type=number]{
        width: 500px;
      }
      
      input[type=number]:focus {
        background-color: whitesmoke;
      }
      
      .formu{
        margin-top:50px;
      }
      
      button{
        background-color: #000000;
        color: white;
        padding: 14px 20px;
        width:500px;
      }
      
      @media only screen and (max-width: 768px){
        input[type=number] {
          width:300px;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
          border: 1px solid #555;
          outline: none;
        }
      
        button{
          background-color: #000000;
          color: white;
          padding: 14px 20px;
          width:300px;
        }
      }

.formm{
    margin-top:50px;
}
    </style>
</head>
<body>
<h1>Penambahan detik</h1>

    <div class="container">
        <div class="formm">
    <form action="" method="post">
        <label for="hh">Jam</label>
        <br>
        <input type="number" name="hh">
        <br><br>
        <label for="mm">Menit</label>
        <br>
        <input type="number" name="mm">
        <br><br>
        <label for="ss">Detik</label>
        <br>
        <input type="number" name="ss">
        <br><br>
        <button type="submit" name="submit">Kirim!</button>
        
    </form>
    </div>
    </div>
    
    <?php
        if(isset($_POST['submit'])) {
            $hh = $_POST['hh'];
            $mm = $_POST['mm'];
            $ss = $_POST['ss'];

            $ss = $ss + 1;
    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;
    }
    
    if($mm >= 60){
        $hh = $hh + 1;
        $mm = 00;
        $ss= 00;
    }

    if($hh >= 24){
        $hh = 00;
        $mm = 00;
        $ss= 00;
    }
    echo "$hh : $mm : $ss";
}
    ?>
   
</body>
</html>