<!--Ülesanne 8 -- Ingmar Hendrik Rohusaar. 29.oktoober
- Kuva kuupäev ja kellaaeg formaadis 20.03.2023 17:31
- Leia kui vana on või kui vanaks saab kasutaja sellel aastal (kasuta vormi)
- Mitu päeva on käesoleva kooliaasta lõpuni? Näiteks: 2023/24 kooliaasta 
  lõpuni on jäänud 64 päeva!
- Väljasta vastavalt aastaajale pilt (kevad, suvi, sügis, talv) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>Sünnikuupäeva detailid</h1>
  <h3>Sisesta oma sünnikuu ja aasta ning umbkaudne kellaaeg.</h3>
  <form action="" method="get">
      <label for="birthDetails">Kuupäev ja kellaaeg (DD.MM.YYYY HH:MM)</label>
      <input type="text" id="birthDetails" name="birthDetails"><br>
      <input type="submit" value="Sisesta">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["birthDetails"])) {
      $birthDetails = $_GET["birthDetails"];
      $birthTime = strtotime($birthDetails);
      $currentYear = date('Y');

      if ($birthTime !== false) {
          $birthYear = date('Y', $birthTime);
          $age = $currentYear - $birthYear;
          $currentMonth = date('n');

          echo "<p>Sa oled $age aastat vana (või saad sel aastal $age aastaseks)!</p>";

          $schoolYearEnd = strtotime('13 June');
          $daysLeft = round(abs($schoolYearEnd - time()) / (60 * 60 * 24));
          echo "Kooliaasta lõpuni on jäänud $daysLeft päeva!<br>";

          $seasons = [
              'kevad' => [3, 4, 5],
              'suvi' => [6, 7, 8],
              'sügis' => [9, 10, 11],
              'talv' => [12, 1, 2]
          ];

          foreach ($seasons as $seasonName => $months) {
              if (in_array($currentMonth, $months)) {
                  $season = $seasonName;
                  break;
              }
          }

      } else {
          echo "<p>Vigane kuupäeva ja kellaaja formaat.</p>";
      }
  }
  ?>
</body>
</html>
