<?php 
foreach ($menus as $key => $value) { 
    if ($value['tipe'] == 'minuman') {
         echo "<option value="" , $key "'>" , $value['menu'] , "</option>"; 
        }
    }
?>