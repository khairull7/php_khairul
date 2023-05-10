<?php

global $nama;
$nama = "Muhammad Khairul Ikhwan";

function tampilkan_nama() {
    
    global $nama;
    echo "Nama saya adalah " . $nama;
}

tampilkan_nama();

?>
