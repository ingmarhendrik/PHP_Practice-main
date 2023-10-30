<?php
$targetDirectory = "uploads/";

if (isset($_POST["submit"])) {
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (isset($_FILES["fileToUpload"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "Fail on pilt - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Fail pole pilt.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
            echo "Vabandust, ainult JPG ja JPEG failid on lubatud.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Vabandust, teie faili üleslaadimine ebaõnnestus.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "Fail " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " on edukalt üles laaditud.";
            } else {
                echo "Vabandust, faili üleslaadimisel tekkis viga.";
            }
        }
    }
}

header("Location: index.php");
?>
