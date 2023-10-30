<?php
$filename = "andmefail.txt";
$file = fopen($filename, "r");

if ($file) {
    $content = fread($file, filesize($filename));

    $processed_content = nl2br($content);

    echo $processed_content;

    fclose($file);
} else {
    echo "Faili lugemine ebaõnnestus.";
}
?>
