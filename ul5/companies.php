<!--Ülesanne 5 -- Firmad -- Ingmar Hendrik Rohusaar. 24.oktoober
- Tekita firma nimedes massiiv ja korrasta
- Kuva firmade nimed
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $companies = array("Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");
    sort($companies);
    foreach ($companies as $company) {
      echo $company . "<br>";
    }
      


    ?>


</body>
</html>