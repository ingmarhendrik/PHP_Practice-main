<!-- Ülesanne 14 -- Suvalised pildid -- Ingmar Hendrik Rohusaar -- 30.oktoober -->

<!DOCTYPE html>
<html>
<head>
    <title>Suvaline pilt</title>
</head>
<body>
<?php
$directory = 'uploads';

$files = scandir($directory);

$imageFiles = array_filter($files, function($file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    return in_array($extension, $allowedExtensions);
});

if (!empty($imageFiles)) {
    $randomImage = $imageFiles[array_rand($imageFiles)];
    $imagePath = $directory . '/' . $randomImage;

    echo "Juhuslik pilt: <a href='$imagePath' target='_blank'>$imagePath</a>";
  } else {
    echo "Kataloogis pole ühtegi pildifaili.";
  }
?>
</body>
</html>
