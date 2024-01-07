<?php
class Sewa{
    public function jenis(){ 
            $Motor_Cross = 15420;
            $Motor_Listrik = 16130;
            $Skuter = 18310;
            $Motor_Sport = 16510;
    }
public $Diskon = 20/100;
}
$member = [
    [
        "nama" => "Bunga",
        "status" => "member"
    ],

    [
        "nama" => "Nikki",
        "status" => "member"
    ],

    [
        "nama" => "Devan",
        "status" => "member"
    ],
    [
        "nama" => "Andi",
        "status" => "member"
    ],
    [
        "nama" => "Rohman",
        "status" => "member"
        
    ],
];

class Nyewa extends Sewa{

    public function cetak($jenis,$waktu){
    $hAkhir= $jenis * $waktu;
    echo "";
    echo "";
    echo "";
    echo "";
    }


}
?>