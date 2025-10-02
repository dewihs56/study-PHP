<?php
    // inisialisai array:
    $foo = array(36,19,27,9,10,10,-89);
    echo $foo[0]; // 36
    echo $foo[2]; // 27

    $foo[3] = 42; // $foo[3] berubah menjadi 42
    echo $foo[3]; // 42

    $i = 4; // i = indeks ke 4
    $foo[$i] = 34; // $foo[4] berubah menjadi 34
    echo $foo[$i]; // 34

    // isi array berbeda tipe data:
    $bar = array(42, 3.14, 'Fred', True);
    $bar = array(); //array kosong

    // ==========

    // ====== dengan key (asosiatif) ======
    $mobil = array("brand"=>"ford", "mode"=>"mustang", "year"=>1964);
    var_dump($mobil);
    echo "<br>";
    
    // menambah value
    $mobil["color"] = "blue";
    var_dump($mobil);
    echo "<br>";

    // ====== dengan INDEX ======
    $mobil = array ("volvo", "bmw", "toyota");
    echo $mobil[2] . "<br>";

    // mengganti value
    $mobil[1] = "frood";
    var_dump($mobil);
    
    // u/ menampilkan semua array dengan perulangan - index
    foreach ($mobil as $x) {
        echo "$x <br>";
    }

    // menambah value antara index
    $i = 2;
    $mobil[$i] = "avanza";
    echo $mobil[$i] . "<br>";

    // menambah di akhir dengan fungsi array_push
    array_push($mobil, "frod");
    var_dump($mobil) . "<br>";

    // menghitung jumlah element array
    count($mobil);
    var_dump($mobil) . "<br>";

    // menghapus akhir
    // echo "===== menghapus ===== <br>";
    $last = array_pop($mobil);
    var_dump($mobil) . "<br>";
    
    // menghapus awal
    $first = array_shift($mobil);
    var_dump($mobil) . "<br>";

    // LOOPING array
    $hewan = ["Kucing", "Anjing", "Kelinci"];

    foreach ($hewan as $h) {
        echo $h . "<br>";
    }
?>