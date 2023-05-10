<?php

$name = "Khairul";
$lastName = "Ikhwan";
$fullName = $name . " " . $lastName;

echo $fullName;
echo "<br>";
echo "<br>";

$string = "Hello World!";
echo strlen($string); 
echo "<br>";
echo "<br>";

$string = "Hello World!";
echo strpos($string, "World");  
echo "<br>";
echo "<br>";

$string = "Hello World";
echo strrev($string);
echo "<br>"; 
echo "<br>";


$teks = "m khairul ikhwan";
$huruf_kecil = strtolower($teks);
$huruf_besar = strtoupper($teks);
echo $huruf_kecil;
echo "<br>";
echo $huruf_besar;
echo "<br>";
?>
