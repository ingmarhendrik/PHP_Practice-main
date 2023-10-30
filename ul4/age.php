<!--Ülesanne 4 - Vanus (if...elseif). Ingmar Hendrik Rohusaar. 24.oktoober-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1>Vanuste võrdleja</h1>
  <form action="" method="get">
      <label for="age1">1. Kasutaja vanus:</label>
      <input type="number" step="1" id="age1" name="age1"><br>

      <label for="age2">2. Kasutaja vanus:</label>
      <input type="number" step="1" id="age2" name="age2"><br>

      <input type="submit" value="Võrdle">
  </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["age1"]) && isset($_GET["age2"])) {
        $age1 = $_GET["age1"];
        $age2 = $_GET["age2"];

  
    if ($age1 === "" || $age2 === "") {
          echo "Sisesta vanus!";
    }
    elseif ($age1 < $age2) {
      echo "Kasutaja 2 on vanem kui Kasutaja 1";
    }
    elseif ($age1 == $age2) {
      echo "Kasutaja 1 on sama vana kui Kasutaja 2.";
    }
    else {
      echo "Kasutaja 1 on vanem kui Kasutaja 2";
    }
      }
    }



    ?>


</body>
</html>