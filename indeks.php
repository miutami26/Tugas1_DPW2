<?php

echo "Animal.php";
echo "<hr>";
 
class kucing {

	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new kucing;
$kucing->nama ="mozza";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "tidak";
$kucing->suara ="meoongg";

echo "kucing <br>";
echo "Mozza adalah namanya <br>";
echo "mempunyai kaki sebanyak : $kucing->jumlah_kaki<br>";
echo "bisa terbang : $kucing->bisa_terbang <br>";
echo "suara : $kucing->suara <br>";
echo "<hr>";

class Angsa{

	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Angsa = new Angsa;
$Angsa->nama ="Swan";
$Angsa->jumlah_kaki = "2";
$Angsa->bisa_terbang = "tidak";
$Angsa->suara ="kwakk-kwakk";

echo "Angsa <br>";
echo "Swan adalah namanya <br>";
echo "mempunyai kaki sebanyak : $Angsa->jumlah_kaki<br>";
echo "bisa terbang : $Angsa->bisa_terbang <br>";
echo "suara : $Angsa->suara <br>";
echo "<hr>";

class Sapi{

	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Sapi = new Sapi;
$Sapi->nama ="sepii";
$Sapi->jumlah_kaki = "4";
$Sapi->bisa_terbang = "tidak";
$Sapi->suara ="MOOOOK";

echo "Sapi<br>";
echo "Sepii adalah namanya <br>";
echo "mempunyai kaki sebanyak : $Sapi->jumlah_kaki<br>";
echo "bisa terbang : $Sapi->bisa_terbang <br>";
echo "suara : $Sapi->suara <br>";
echo "<hr>";

class beo{

	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Beo = new Beo;
$Beo->nama ="leo";
$Beo->jumlah_kaki = "2";
$Beo->bisa_terbang = "bisa";
$Beo->suara ="piuuuu";

echo "Beo<br>";
echo "leo adalah namanya <br>";
echo "mempunyai kaki sebanyak : $Beo->jumlah_kaki<br>";
echo "bisa terbang : $Beo->bisa_terbang <br>";
echo "suara : $Beo->suara <br>";
echo "<hr>";










?>