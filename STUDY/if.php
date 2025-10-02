<?php
    // if (kondisi){
    //     true
    // } else {
    //     false
    // }

    // ===== contoh 1 =====
    $namahero = "zhas ";
    $level = 0;
    
    if ($level < 4) {
        echo $namahero. "belum memiliki ulti <br>";
    } else if ($level >= 4) {
        echo $namahero. "sudah memiliki ulti <br>";
    } else {
        echo $namahero. "tidak ada dalam daftar <br>";
    }
    
    
    // ===== contoh 2 =====
    $warna = 'red';
    if ($warna == "green") {
        $warna = "hijau";
    } elseif ($warna == "blue") {
        $warna = "biru";
    } else {
        $warna = "merah";
    }
    echo $warna;
?>