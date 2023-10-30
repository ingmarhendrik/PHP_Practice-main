<?php
// Ülesanne 11 - Ingmar Hendrik Rohusaar - TARpe22 - 29.10.2023
$filename = "andmefail.txt";
$file = fopen($filename, "w");

if ($file) {
    $data = array(
        "Nimi" => "John Doe",
        "Email" => "johndoe@tthk.ee",
        "Vanus" => 30,
        "Hobi" => "Jalgrattasõit"
    );

    foreach ($data as $key => $value) {
        fwrite($file, "$key: $value\n");
    }

    fclose($file);
    echo "Andmed on salvestatud faili \"$filename\".";
} else {
    echo "ERROR";
}
?>


