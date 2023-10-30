<!--Ülesanne 5 - Tüdrukud - Ingmar Hendrik Rohusaar. 24.oktoober
Koosta vähemalt 8 tüdruku nimedega massiiv. Kasuta funktsiooni sort(), et sorteerida ja väljastada need kasvavas järjekorras ning kuvada ridade kaupa.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $girls = array("Julia", "Ingela", "Olivia", "Emily", "Sophie", "Violet", "Lili", "Hannah");

    sort($girls);

    foreach ($girls as $name) {
        echo $name . "<br>";
    }
    ?>

</body>
</html>