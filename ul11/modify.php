<?php
$filename = "andmefail.txt";
$file = fopen($filename, "r+");

if ($file) {
    $firstLine = fgets($file);

    $newData = "Telefon: 555-1234\nAadress: 123 Main Street\n";

    fwrite($file, $newData . $firstLine);

    fclose($file);
    echo "Faili muutmine õnnestus.";
} else {
    echo "Faili muutmine ebaõnnestus";
}
?>
