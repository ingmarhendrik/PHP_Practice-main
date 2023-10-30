<!--Ülesanne 2. Ingmar Hendrik Rohusaar. 10.oktoober-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <code>
    <?php
    // 1.
    $var1 = 60;
    $var2 = 30;

    echo "Liitmine: $var1 + $var2 = " . ($var1 + $var2) . "<br>";
    echo "Lahutamine: $var1 - $var2 = " . ($var1 - $var2) . "<br>";
    echo "Korrutamine: $var1 * $var2 = " . ($var1 * $var2) . "<br>";
    echo "Jagamine: $var1 / $var2 = " . ($var1 / $var2) . "<br>";
    echo "Jäägi leidmine: $var1 % $var2 = " . ($var1 % $var2) . "<br>";

    // 2. 

    function convertMillimetres($number) {
        $number_in_cm = round($number / 10, 2);
        $number_in_m = round($number / 1000, 2);

        echo "Number sentimeetrites: $number_in_cm<br>Number meetrites: $number_in_m<br>";
    }


   // 3. 

    function findPerimeterAreaRightTriangle($a, $b, $c) {
        $perimeter = round($a + $b + $c);
        $area = round(sqrt($perimeter * ($perimeter - $a) * ($perimeter - $b) * ($perimeter - $c)));
        echo "Täisnurkse kolmnurga ümbermõõt on $perimeter ja selle pindala $area";
    }
      

    convertMillimetres(600);
    findPerimeterAreaRightTriangle(3, 4, 5); 
    ?>
    </code>
</body>
</html>
