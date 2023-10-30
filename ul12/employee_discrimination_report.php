<!--Ülesanne 12 -- Ingmar Hendrik Rohusaar. 30.oktoober

Palkade võrdlus
Kasuta tootajad.csv andmefaili, kuhu on lisatud töötajate nimed, sugu ja palganumber. Koosta programm, mis analüüsib kas firmas toimub diskrimineerimist soo järgi. Too välja meeste ja naiste palkade keskmiseid ja kõige suuremad palgad. -->


<!DOCTYPE html>
<html>
<head>
    <title>Töötajate diskrimineerimise analüüs</title>
</head>
<body>
    <?php
    $csvFile = fopen('tootajad.csv', 'r');

    $menSalaries = [];
    $womenSalaries = [];
    $highestMenSalary = 0;
    $highestWomenSalary = 0;

    while (($row = fgetcsv($csvFile, 0, ';')) !== false) {
        $name = $row[0];
        $gender = $row[1];
        $salary = (int) $row[2];

        if ($gender === 'm') {
            $menSalaries[] = $salary;
            if ($salary > $highestMenSalary) {
                $highestMenSalary = $salary;
            }
        } elseif ($gender === 'n') {
            $womenSalaries[] = $salary;
            if ($salary > $highestWomenSalary) {
                $highestWomenSalary = $salary;
            }
        }
    }

    fclose($csvFile);

    $averageMenSalary = round(array_sum($menSalaries) / count($menSalaries));
    $averageWomenSalary = round(array_sum($womenSalaries)) / count($womenSalaries);

    echo "<h2>Töötajate diskrimineerimise analüüs</h2>";
    echo "Meeste keskmine palk: " . $averageMenSalary . "€<br>";
    echo "Naiste keskmine palk: " . $averageWomenSalary . "€<br>";
    echo "Meeste kõrgeim palk: " . $highestMenSalary . "€<br>";
    echo "Naiste kõrgeim palk: " . $highestWomenSalary . "€<br>";
    ?>
</body>
</html>
