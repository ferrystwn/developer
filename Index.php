<?php
require_once('oop/Animal.php');
require_once('oop/Frog.php');
require_once('oop/Ape.php');

$sheep = new Animal("shaun");

echo "Nama Binatang : ".$sheep->animal."<br>"; // "shaun"
echo "Jumlah Kaki : ".$sheep->legs."<br>"; // 2
echo "Berdarah Dingin : ".$sheep->cold_blooded."<br><br>" ;// false

$sungokong = new Ape("kera sakti");
echo "Nama Binatang : ".$sungokong->animal."<br>"; // "shaun"
echo "Jumlah Kaki : ".$sungokong->legsa."<br>"; // 2
echo "Berdarah Dingin : ".$sungokong->cold_blooded."<br>" ;// false
echo $sungokong->yell("auooo")."<br><br>"; // "Auooo"

$kodok = new Frog("buduk");
echo "Nama Binatang : ".$kodok->animal."<br>"; // "shaun"
echo "Jumlah Kaki : ".$kodok->legsf."<br>"; // 2
echo "Berdarah Dingin : ".$kodok->cold_blooded."<br>" ;// false
echo $kodok->jump("hop hop") ; // "hop hop"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>