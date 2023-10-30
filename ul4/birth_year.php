<!--Ülesanne 4 - Jubilee. Ingmar Hendrik Rohusaar. 24. oktoober-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1>Juubeli detektor</h1>
  <h3>Sisesta oma sünniaasta.</h3>
  <form action="" method="get">
      <label for="birthYear">Sünniaasta</label>
      <input type="number" id="birthYear" name="birthYear"><br>
      <input type="submit" value="Sisesta">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["birthYear"])) {
          $birthYear = $_GET["birthYear"];

          if (!empty($birthYear)) {
              $birthYear = intval($birthYear);

              if ($birthYear % 5 == 0 ) {
                  $result = "See on juubeliaasta!";
              } else {
                  $result = "See ei ole juubeliaasta.";
              }
          } else {
              $result = "Palun sisestage sünniaasta.";
          }
          echo "<p>$result</p>";
      }
  }
  ?>
</body>
</html>
