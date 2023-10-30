<?php
$hutangnegara = array(10000,50000,10000,5000,20000,5000,50000,20000);

$hutangnegarakalimat = implode(", ",$hutangnegara);
echo "Uang yang terdapat di tabungan saya adalah "."<b>".$hutangnegarakalimat."</b><br>";

echo "Jumlah tabungan saya adalah "."<b>".array_sum($hutangnegara)."</b><br>";

$hutangunik = array_unique($hutangnegara);
$hutangnegarakalimat = implode(", ",$hutangunik);
echo "Dalam tabungan saya terdapat uang pecahan "."<b>".$hutangnegarakalimat."</b><br>";

echo "Pecahan uang terkecil adalah "."<b>".min($hutangnegara)."</b><br>";

echo "Pecahan uang terbesar adalah "."<b>".max($hutangnegara)."</b><br>";

asort($hutangnegara);
$K = implode(", ", $hutangnegara);
echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah "."<b>".$K."</b><br>";

arsort($hutangnegara);
$B = implode(", ", $hutangnegara);
echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah "."<b>".$B."</b><br>";

array_splice($hutangnegara, 0, 2, 100000);
$seratus = implode(", ", $hutangnegara);
echo "Saya ingin mengganti pecahan <b>50000</b> yang ada ditabungan menjadi <b>100000</b>, maka uang yang ada ditabungan menjadi "."<b>".$seratus."</b><br>";

array_push($hutangnegara, 20000);
$duapuluh = implode(", ",$hutangnegara);
echo "Hari ini saya menabung sebesar <b>20000</b>, maka kini uang yang berada ditabungan saya adalah "."<b>".$duapuluh."</b><br>";

asort($hutangnegara);
$K = implode(", ", $hutangnegara);
echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah "."<b>".$K."</b><br>";

echo "Maka jumlah tabungan saya saat ini adalah "."<b>".array_sum($hutangnegara)."</b><br>";