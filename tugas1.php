<?php
$a = 10;
$b = 5;

$LebihKecil = $a < $b;
$LebihBesar = $a > $b;
$SamaDengan = $a == $b;
$TidakSama = $a != $b;
$LebihBesarSamaDengan = $a >= $b;
$LebihKecilSamaDengan = $a <= $b;

echo 'Nilai $a: ' . $a . '<hr>';
echo 'Nilai $b: ' . $b . '<hr>';

echo '$a < $b: ' . ($LebihKecil ? 'true' : 'false') . '<hr>';
echo '$a > $b: ' . ($LebihBesar ? 'true' : 'false') . '<hr>';
echo '$a == $b: ' . ($SamaDengan ? 'true' : 'false') . '<hr>';
echo '$a != $b: ' . ($TidakSama ? 'true' : 'false') . '<hr>';
echo '$a >= $b: ' . ($LebihBesarSamaDengan ? 'true' : 'false') . '<hr>';
echo '$a <= $b: ' . ($LebihKecilSamaDengan ? 'true' : 'false') . '<hr>' ;

?>