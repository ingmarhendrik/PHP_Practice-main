<!--Ülesanne 5 -- Pildid -- Ingmar Hendrik Rohusaar. 24.oktoober
- Tekita /img kataloog ja sinna profiilipildid samade nimedega
- Kuva massiivist kolmas pilt
- Kuva massiivist kõik pildid
- Kuva pildid Bootstrapi abil 6 veerus-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        $images = array('prentice.jpg', 'peterus.jpg', 'pete.jpg', 'gabriel.jpg', 'freeland.jpg', 'devlin.jpg');

        echo '<img src="img/' . $images[2] . '" alt="' . $images[2] . '">';

        foreach ($images as $image) {
            echo '<div class="row">';
            echo '<div class="col">';
            echo '<img src="img/' . $image . '" alt="' . $image . '">';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
