<!-- Ülesanne 13 -- Ingmar Hendrik Rohusaar -- 30.oktoober -->

<!DOCTYPE html>
<html>
<head>
    <title>JPG, JPEG Failide Kuvamine</title>
</head>
<body>
    <h1>Lae üles JPG või JPEG fail</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Valige fail üleslaadimiseks:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Laadi üles" name="submit">
    </form>

    <h2>Üleslaetud pildid:</h2>
    <?php
    $uploadDirectory = "uploads/";
    $files = scandir($uploadDirectory);
    foreach ($files as $file) {
        if ($file !== "." && $file !== ".." && (pathinfo($file, PATHINFO_EXTENSION) === 'jpg' || pathinfo($file, PATHINFO_EXTENSION) === 'jpeg')) {
            echo '<a href="' . $uploadDirectory . $file . '" target="_blank">' . $file . '</a><br>';
        }
    }
    ?>
</body>
</html>
