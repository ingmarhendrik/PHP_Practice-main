<!--
Ülesanne 5 - Keskmised palgad - Ingmar Hendrik Rohusaar. 27.oktoober
Leia 2018 aasta palkade keskmine. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $salaries_2018 = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

    $sum_of_salaries = array_sum($salaries_2018);

    $average_salary = $sum_of_salaries / count($salaries_2018);

    echo "2018 aasta palkade keskmiseks on " . $average_salary . "€";
        

    ?>


</body>
</html>