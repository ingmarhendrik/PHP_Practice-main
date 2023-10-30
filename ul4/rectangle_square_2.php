<!--Ülesanne 4 - Ristkülik või ruut II. Ingmar Hendrik Rohusaar. 24.oktoober-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .shape {
            width: 100px;
            height: 100px;
            background-color: black;
            margin: 10px;
        }
    </style>
</head>
<body>
  <h1>Ristkülik või ruut?</h1>
  <form action="" method="get">
      <label for="length">Pikkus</label>
      <input type="number" step="10" id="length" name="length" required><br>

      <label for="width">Laius</label>
      <input type="number" step="10" id="width" name="width" required><br>

      <input type="submit" value="Sisesta">
  </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["length"]) && isset($_GET["width"])) {
        $length = $_GET["length"];
        $width = $_GET["width"];

        echo "<div class='shape' style='width: {$length}px; height: {$width}px;'></div>";
      }
    }
    ?>
</body>
</html>
