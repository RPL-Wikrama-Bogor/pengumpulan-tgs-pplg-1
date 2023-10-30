<?php 

$i;
$terbesar;
$terkecil;
$rata_rata;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max, Min, Average</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <tr>
               <td>
                <?php for($i=1; $i<=20; $i++)
                    echo "Bilangan ke $i : <input type='number' name='nilai[]' required><br>";
                ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="input" name="input"></td>
            </tr>
        </form>
    </table>

    <?php 

    if(isset($_POST['input'])){
        $i = $_POST['nilai'];

        $jumlah = count($i);
        if($jumlah == 0) {
            echo "Belum ada bilangan yang diinput";
        }else if($jumlah < 20 ){
            echo "Bilangan kurang dari 20!";
        }else{
            $terbesar = $i[0];
            $terkecil = $i[0];
            $total = 0;

            foreach ($i as $n){
                if($n > $terbesar){
                    $terbesar = $n;
                }
                if($n < $terkecil){
                    $terkecil = $n;
                }
                $total += $n;
            }

            $average = $total / $jumlah;

            echo "Bilangan Terbesar : $terbesar <br>";
            echo "Bilangan Terkecil : $terkecil <br>";
            echo "Rata-rata : $average <br>";
        }
        
    }

    ?>

</body>
</html>