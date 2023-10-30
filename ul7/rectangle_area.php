<!--Ülesanne 7 -- Ristküliku pindala -- Ingmar Hendrik Rohusaar. 29.oktoober
Koosta funktsioon, mis leiab kasutaja antud arvudega ristkülikupindala -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  function findRectangleArea($width, $height) {
    $area = $width * $height;
    echo "Ristküliku pindala: $area";
  }
  findRectangleArea(7, 5);



  ?>


</body>
</html>