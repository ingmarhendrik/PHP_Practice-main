<!--Ülesanne 4 - Hinne -- Ingmar Hendrik Rohusaar. 24. oktoober-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1>Kontrolltöö hinde kalkulaator</h1>
  <h3>Sisesta kontrolltöö punktide arv.</h3>
  <form action="" method="get">
      <label for="points">Punktide arv:</label>
      <input type="number" id="points" name="points"><br>
      <input type="submit" value="Sisesta">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["points"])) {
            $points = $_GET["points"];

            if (!is_numeric($points)) {
                echo "Sisesta oma punktid!";
            } else {
                if ($points > 10) {
                    echo "SUPER!";
                } elseif ($points >= 5 && $points <= 9) {
                    echo "TEHTUD!";
                } elseif ($points < 5 && $points >= 0) {
                    echo "KASIN!";
                } else {
                    echo "Sisesta oma punktid!";
                }
            }
      }
  }
  ?>
</body>
</html>