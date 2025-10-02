<?php

    // ===== contoh 1 w/ argument/parameter =====
function familyname($name) {
    echo "$name Mahabarata. <br>";
}

familyname("Krisna");
familyname("Agung");
familyname("Dewa");

    // ===== contoh 2 =====
function sum($num1, $num2) {
    return $num1 + $num2 . "<br>";
}

echo sum(4,1);
echo sum(7,11);


    // ===== contoh default argumen =====
echo "<br>";
function setTinggi($mintinggi = 100) {
    echo "Tinggi saya : $mintinggi <br>";
}

setTinggi(); //100 = default value
setTinggi(145);
setTinggi(170);

?>