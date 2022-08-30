<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore di Number : ";
var_dump(1_241_241_241);

echo "<br>";
echo "<br>";

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(73-3);

echo "Underscore di Floating Point : ";
var_dump(1_234.567);

echo "<br>";
echo "<br>";

echo "Integer Overflow 32 Bit ";
var_dump(2147483648);

echo "Integer Overflow 64 Bit ";
var_dump(9230049959930023);

echo "<br>";
echo "<br>";

echo "Benar : ";
var_dump(true);

echo "Salah : ";
var_dump(False);

echo "<br>";
echo "<br>";

echo 'Nama : ';
echo 'Eko Kurniawan Khaneddy';
echo "/n";

echo "Nama : ";
echo "Eko/t Kurniawan/t Khaneddy/n";

echo "<br>";
echo "<br>";

$heredoc = <<<EKO
Ini adalah contoh string yang sangat panjang, dan juga perlu ngetik ENTER secara manual, "Bisa Quote" juga 
EKO;
echo $heredoc;

$heredoc = <<<'EKO'
Ini adalah contoh string yang sangat panjang, dan juga perlu ngetik ENTER secara manual, "Bisa Quote" juga
EKO;
echo $heredoc;

echo "<br>";
echo "<br>";

$name = "EKO"." ";
$age = 30;

echo "Name : " ;
echo $name;
echo "Age : " ;
echo $age;

echo "<br>";
echo "<br>";

define("AUTHOR", "programmer zaman now ");
define("APP_VERSION", 100);

echo AUTHOR;
echo APP_VERSION;

echo "<br>";
echo "<br>";

$name = "Eko";
$name = NULL;

$isNull = is_null($name);

var_dump($isNull);

echo "<br>";
echo "<br>";

$values = array(1,2,3,4);
var_dump($values);

$name = [ "Eko", "Kurniawan", "Khannedy"];
var_dump($name);
























