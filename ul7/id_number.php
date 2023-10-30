<!--Ülesanne 7 -- Isikukood -- Ingmar Hendrik Rohusaar. 29.oktoober
Koosta funktsioon, mis leiab, kas sisestatud isikukood on õige pikkusega
Täienda funktsiooni, et kui isikukood on kirjas leitakse sugu ja sünniaeg -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    function idNumberDetails(string $idNumber) 
    {
      if (strlen($idNumber) != 11) 
      {
        echo "Isikukoodis peab olema 11 numbrit!";
        return;
      }
      $gender = "";
      if ($idNumber[0] == 1 || $idNumber[0] == 3 || $idNumber[0] == 5 || $idNumber[0] == 7) 
      {
        $gender = "Mees";
      }
      elseif ($idNumber[0] == 2 || $idNumber[0] == 4 || $idNumber[0] == 6 || $idNumber[0] == 8) 
      {
        $gender = "Naine";
      }
      else 
      {
        echo "Vigane isikukood.";
        return;
      }
      $birthYear = "";
      if ($idNumber[0] == 1 || $idNumber[0] == 2) {
        $birthYear = "18" . substr($idNumber, 1, 2);
      }
      elseif ($idNumber[0] == 3 || $idNumber[0] == 4) {
        $birthYear = "19" . substr($idNumber, 1, 2);
      }
      elseif ($idNumber[0] == 5 || $idNumber[0] == 6) {
        $birthYear = "20" . substr($idNumber, 1, 2);
      }
      elseif ($idNumber[0] == 7 || $idNumber[0] == 8) {
        $birthYear = "21" . substr($idNumber, 1, 2);
      }
      else {
        echo "Vigane isikukood.";
        return;
      }

      // Display the gender and birth year
      echo "Sugu: " . $gender . "<br>";
      echo "Sünniaasta: " . $birthYear;
    }
    
    idNumberDetails("199505230818");
    ?>

</body>
</html>

