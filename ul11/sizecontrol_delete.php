<?php
$filename = "andmefail.txt";
$filesize = filesize($filename);

if ($filesize > 200) {
    unlink($filename);
    echo "Fail nimega \"$filename\" on kustutatud.";
} else {
    echo "Faili nimega \"$filename\" ei saa kustutada.";
}
?>
