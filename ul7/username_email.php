<!--Ülesanne 7 -- Kasutajanimi ja email -- Ingmar Hendrik Rohusaar. 29.oktoober
- Loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
- Täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
- Täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood
- Täienda koodi nii, et luuakse tähed ja numbrid läbisegamini-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    function changeUsernameToLowercase($username) {
      $lowercaseUsername = strtolower($username);
      $email = $lowercaseUsername . "@hkhk.edu.ee";
      $code = '';
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 7; $i++) {
          $code .= $characters[rand(0, $charactersLength - 1)];
      }
      echo "Kasutajanimi: $lowercaseUsername <br>";
      echo "Email: $email <br>";
      echo "Kood: $code <br>";
    }

    changeUsernameToLowercase("Ingmar");
    ?>
</body>


</body>
</html>