<!--Ülesanne 4 - Jagamine. Ingmar Hendrik Rohusaar. 24.oktoober-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1>Jagamise kalkulaator</h1>
  <form action="" method="get">
      <label for="number1">Esimene täisarvuline muutuja:</label>
      <input type="number" step="1" id="number1" name="number1"><br>

      <label for="number2">Teine täisarvuline muutuja:</label>
      <input type="number" step="1" id="number2" name="number2"><br>

      <input type="submit" value="Jaga">
  </form>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["number1"]) && isset($_GET["number2"])) {
      $number1 = $_GET["number1"];
      $number2 = $_GET["number2"];
 
      if ($number2 == 0) {
        echo "Nulliga ei saa jagada!";
      }
      else if (empty($number1) || empty($number2)) {
        echo "Sisesta number!";
      }
      else {
        echo ($number1 / $number2);
      }
    }
  }
  ?>


</body>
</html>
