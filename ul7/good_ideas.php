<!--Ülesanne 7 -- Head mõtted -- Ingmar Hendrik Rohusaar. 29.oktoober
Koosta funktsioon, mis hoiab endas kolme ühepikkust massiivi: alus, öeldis ja sihitis
Koosta kood, mis lehele laadimisel valib suvaliselt igast massiivist elemendi ja koostab lause -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $alus = ["Poiss", "Sõber", "Masin", "Hunt"];
    $oeldis = ["kohtas", "programmeerib", "soovib", "tahab"];
    $sihitis = ["sõpra", "koodi", "kommi", "koera"];

    $randomAlus = $alus[array_rand($alus)];
    $randomOeldis = $oeldis[array_rand($oeldis)];
    $randomSihitis = $sihitis[array_rand($sihitis)];

    echo $randomAlus . " " . $randomOeldis . " " . $randomSihitis . ".";


    ?>


</body>
</html>