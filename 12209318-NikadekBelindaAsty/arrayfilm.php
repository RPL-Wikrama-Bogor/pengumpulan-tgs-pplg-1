<?php
$listFilm =[
    [
        "judul" =>"miracle in call no. 7",
        "min-usia" => 15,
        "harga" => 35000
         
    ],
    [
        "judul" =>"Barbie",
        "min-usia" => 17,
        "harga" => 45000
         
    ],
    [
        "judul" =>"oppenheimer",
        "min-usia" => 17,
        "harga" => 40000
         
    ]
]
?>
<center>
    <form action="" method="post">
        <table>
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia" placeholder="Masukan usia"></td>
            </tr>
            <tr>
                <td>Film</td>
                <td>
                    <select name="judul">
                <option hidden disabled selected>--pilih film--</option>>
                <?php
                    foreach($listFilm as $key => $film) {
                ?>
            <option value="<?=$key ?>"><?= $film['judul'] ?></option>
             <?php
              }
             ?>
            </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    </center>
    <?php
    if(isset($_POST['submit'])) {
        $usia = $_POST['usia'];
        $judulfilm= $_POST['judul'];
        $minUsia = $listFilm[$judulfilm]['min-usia'];
        $harga = $listFilm[$judulfilm]['harga'];

        if($usia >= $minUsia) {
            echo "<h2 style='color: #fda4af; text-align: center; font-size: 30px; margin-top: 20px;'>silahkan untuk membayar sebesar Rp. " .
            number_format($harga, 2, ',', '.') . "</h2>";
        }else{
            echo"<h2 style='color: red; text-align: center; font-size: 30px; margin-top: 20px;'>usia belum cukup</h2>";
        }
        }
    ?>