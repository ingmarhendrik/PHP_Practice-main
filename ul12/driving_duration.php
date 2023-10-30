<!--Ülesanne 12 -- Ingmar Hendrik Rohusaar. 30.oktoober -->

<!-- SÕIDUAEG
Leia auto sõiduaeg tundides ja minutites. Arvutused teosta kasutajalt saadud andmete põhjal, kus kasutaja lisab stardi ja lõppaja kujul hh:mm. Eeldame, et sõiduaeg jääb ühe ööpäeva sisse. Lisa tühja välja kontroll ja näiteks, kas lisatud ajad on vähemalt viis sümbolit pikad. -->

<!DOCTYPE html>
<html>
<head>
    <title>Sõiduaja arvutamine</title>
</head>
<body>
  <h1>Sisestage stardi- ja lõppaeg (hh:mm):</h1>
  <form action="" method="get">
      <label for="start_time">Stardiaeg:</label>
      <input type="text" id="start_time" name="start_time"><br>

      <label for="end_time">Lõppaeg:</label>
      <input type="text" id="end_time" name="end_time"><br>

      <input type="submit" value="Arvuta">
  </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
if (isset($_GET["start_time"]) && isset($_GET["end_time"])) {
  $start_time = $_GET["start_time"];
  $end_time = $_GET["end_time"];

        $start_parts = explode(":", $start_time);
        $end_parts = explode(":", $end_time);

        $start_minutes = $start_parts[0] * 60 + $start_parts[1];
        $end_minutes = $end_parts[0] * 60 + $end_parts[1];

        $diff_minutes = ($end_minutes - $start_minutes + 24 * 60) % (24 * 60);

        $hours = floor($diff_minutes / 60);
        $minutes = $diff_minutes % 60;

        echo "Sõiduaeg: $hours tundi ja $minutes minutit";
    }
}
?>
