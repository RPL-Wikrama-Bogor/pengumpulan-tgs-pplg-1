<?php

for($i = 1; $i<=50; $i++ ){
    if ($i % 2 == 1){
        echo "$i" . " bilangan ganjil"; //bilangan ganjil//
        echo "<br>";
    } elseif ($i % 2 == 0){
        echo "$i" . " bilangan genap"; //bilangan genap
        echo "<br>";
    }
}