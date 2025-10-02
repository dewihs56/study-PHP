<?php
    // if ($ekspresi){
    //     echo '<strong>Ini true.</strong';
    // } else {
    //     echo '<string>Ini false.</strong>';
    // }
    

    // menampilkan di web
    echo 'hello world <br>'; //hello world
    echo 42, '<br>'; //42
    echo ('hello world <br>'); //hello world
    echo 'hello', 42, 'world <br>'; //hello42world

    $value = 19;
    echo sqrt($value * 64), '<br>'; // 34.871191548325 

    // menggabungkan data - u/ menggabungkan data string dg menggunakan tanda titik ('.')
    echo 'Hello' . 'World <br>';
    
    // penggunaan tanda petik / quote
    // karakter string dalam singel quote tidak diproses
    $x = 3;
    $y = 7;
    echo 'multiply: ($x * $y) <br>'; // multiply: ($x * $y)
    echo "multiply: ($x * $y)"; // multiply: (3 * 7)