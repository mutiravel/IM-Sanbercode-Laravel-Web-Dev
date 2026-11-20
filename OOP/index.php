<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun");

echo $sheep->name . "<br/>"; // "shaun"
echo $sheep->Legs."<br/>"; // 4
echo $sheep->cold_blooded."<br/>"; // "no"

echo "---------------------<br/>";

$sungokong = new ape("kera sakti");
echo "Nama: " . $sungokong->name . "<br>";
echo "Kaki: " . $sungokong->legs . "<br>";
$sungokong->yell(); // "Auooo"
echo "<br/>";
echo "---------------------<br/>";

$kodok = new frog("buduk");
echo "Nama: " . $kodok->name . "<br>";
echo "Kaki: " . $kodok->Legs . "<br>";
$kodok->jump() ; // "hop hop"

?>