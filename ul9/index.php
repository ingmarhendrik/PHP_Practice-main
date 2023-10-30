<!--Ülesanne 9 -- Ingmar Hendrik Rohusaar. 29.oktoober
Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @tthk.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form action="" method="get">
      <label for="name">Nimi</label>
      <input type="text" id="name" name="name"><br>
      <input type="submit" value="Sisesta">
  </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["name"])) {
            $name = $_GET["name"];

            if (!empty($name)) {
                $name = preg_replace('/[^a-zA-ZäöüõÄÖÜÕ]/', '', $name);

                $upperName = ucfirst(strtolower($name));
                echo "Tere tulemast, $upperName!<br>";

                $result = "";
                for ($i = 0; $i < strlen($name); $i++) {
                    $result .= $name[$i] . '.';
                }
                echo $result;

                echo "<br>";

                $rudeWords = array("fuck", "ass", "shit", "motherfucker");
                $name = str_replace($rudeWords, "*", $name);
                echo "Sõnum ilma ropendusteta: $name<br>";

                $email = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "u", "o"), $name);
                $email = strtolower($email) . "@tthk.ee";
                echo "Email: $email";
            }
        }
    }
    ?>
</body>
</html>
