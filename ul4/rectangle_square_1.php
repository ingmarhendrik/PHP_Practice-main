<!--Ülesanne 4 - Ristkülik või ruut I. Ingmar Hendrik Rohusaar. 24.oktoober-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <h1>Ristkülik või ruut?</h1>
  <form action="" method="get">
      <label for="length">Pikkus</label>
      <input type="number" step="0.1" id="length" name="length" required><br>

      <label for="width">Laius</label>
      <input type="number" step="0.1" id="width" name="width" required><br>

      <input type="submit" value="Sisesta">
  </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["length"]) && isset($_GET["width"])) {
        $length = $_GET["length"];
        $width = $_GET["width"];

        if ($length == $width) {
          echo "Ruut";
        
        } 
        else {
          echo "Ristkülik";
        }
      }
    }



    ?>


</body>
</html>