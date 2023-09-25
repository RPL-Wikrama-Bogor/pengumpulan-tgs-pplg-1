<?php

for($i = 1; $i<=50; $i++ ){
    if ($i % 2 == 1){
        echo "$i" . " Bilangan ganjil";
        echo "<br>";
    } elseif ($i % 2 == 0){
        echo "$i" . " Bilangan genap";
        echo "<br>";
    }
}