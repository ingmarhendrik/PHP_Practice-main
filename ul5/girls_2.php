<!--
Ülesanne 5 - Tüdrukud II - Ingmar Hendrik Rohusaar. 24.oktoober
- Väljasta tüdrukute nimekirjast esimesed 3 nime
- Väljasta viimane nimi
- Väljasta üks suvaline nimi (suvaline arv genereeritakse vastavalt massiivis olevate elementide arvule)
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $girls = array("Julia", "Ingela", "Olivia", "Emily", "Sophie", "Violet", "Lili", "Hannah");

    $first_three_names = array_slice($girls, 0, 3);
    $last_name = array_pop($girls);
    $random_index = array_rand($girls);
    $random_name = $girls[$random_index];

    echo "Esimesed kolm nime: " . join(", ", $first_three_names) . "<br>";
    echo "Viimane nimi: $last_name<br>";
    echo "Suvaline nimi: $random_name";
    ?>
</body>
</html>
