<?php
    // switch ($variabel) {
    //     case 'value':
    //         code ... ;
    //         break;
    //     default:
    //         code ... ;
    //         break;
    // }

    // ===== contoh 1 =====
    $warna = "";
    switch ($warna){
        case "green":
            $warna = "hijau <br>";
            break;
        case "blue":
            $warna = "biru <br>";
            break;
        case "red":
            $warna = "merah <br>";
            break;
        default:
            $warna = "tidak berwarna <br>";       
    }
    echo "ini warna ". $warna;


    // ===== contoh 2 =====
    $namahero = "zhas ";
    $level = 5;

    $skill = $level <= 4 ? $namahero. "belum memiliki ulti <br>" : $namahero. "sudah memiliki ulti <br>";
    echo $skill;

    switch ($level) {
        case 2:
            echo $namahero. "level bawah <br>";
            break;
        case 5;
            echo $namahero. "level menengah <br>";
            break;
        case 8:
            echo $namahero. "level atas <br>";
            break;
        default: //ketika case diatas tidak terpenuhi sama sekali
            echo $namahero. "tidak ada level <br>";
            break;
    }
?>