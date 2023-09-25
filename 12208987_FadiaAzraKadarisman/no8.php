 <?php 
    $bil;
    $sat;
    $pul;
    $rat;
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satuan, puluhan, ratusan</title>
 </head>
 <body>
 <h1>Satuan, puluhan, ratusan</h1>
    <form action="" method="post">   
    <table>
            <tr>
                <td>Input Angka</td>
                <td>:</td>
                <td><input type="number" name="angka"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
    </table>
    </form>
 </body>
 </html>

 <?php 
    if(isset($_POST['submit'])){
        $bil = $_POST['angka'];

        $sat = $bil % 10;
        $pul = ($bil / 10) % 10;
        $rat = floor(($bil / 100) % 10);

        echo $sat . " satuan " . $pul . " puluhan ". $rat ." ratusan";
    }