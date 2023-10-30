<!-- Ülesanne 5 -- Riigid -- Ingmar Hendrik Rohusaar. 27.oktoober
Kuva kõige pikema riigi nime märkide arv. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $countries = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines", "Philippines","Canada","Philippines","South Sudan","Brazil", "Democratic Republic of the Congo","Indonesia","Syria","Sweden", "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France", "Kazakhstan","Cuba","Portugal","Czech Republic");
    $longest = "";
    foreach($countries as $country)
    {
        if(strlen($longest) < strlen($country)) 
        {
            $longest = $country;
        }
    }
    echo $longest;

    ?>


</body>
</html>