<!--Ülesanne 10 -- Ingmar Hendrik Rohusaar. 29.oktoober
- Sinu ülesandeks on luua 4 dokumendiga veebileht
- Lehe sisu muutub dünaamiliselt, vastavalt lingi sisule
- Kui lehte ei eksiteeri, siis peab kasutajat ka sellest teavitama
- Loo lihtne turvalisuse kontroll-->

<!DOCTYPE html>
<html>
<head>
    <title>Ingmari veebisait</title>
</head>
<body>
    <ul>
        <li><a href="?page=index">Home</a></li>
        <li><a href="?page=about">About</a></li>
        <li><a href="?page=faq">FAQ</a></li> 
        <li><a href="?page=contact">Contact</a></li>
    </ul>

    <?php
    function cleanInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if (isset($_GET['page'])) {
        $page = cleanInput($_GET['page']);
        $allowed_pages = ['home', 'about', 'faq', 'contact']; 

        if (in_array($page, $allowed_pages)) {
            include($page . '.php');
        } else {
            echo "The selected page does not exist!";
        }
    } else {
        echo "Select a page from the menu above.";
    }
    ?>

</body>
</html>


