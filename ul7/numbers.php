<!--Ülesanne 7 -- Arvud -- Ingmar Hendrik Rohusaar. 29.oktoober
Koosta funktsioon, mis lubab kasutajal valida arvude vahemikku. Näiteks 2 ja 8, tekitavad 2, 3, 4, 5, 6, 7, 8
Täienda funktsiooni nii, et saab muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    function getRangeOfNumbers($start, $end, $step) 
    {
      for ($i = $start; $i <= $end; $i += $step) 
      {
        echo "$i<br>";
      }
    }
    getRangeOfNumbers(2, 8, 3);


    ?>


</body>
</html>