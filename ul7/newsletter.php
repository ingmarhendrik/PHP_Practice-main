<!--Ülesanne 7 -- Liitu uudiskirjaga -- Ingmar Hendrik Rohusaar. 29.oktoober
Koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php

    function createNewsletterForm() {
        echo '<div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2>Liitu meie uudiskirjaga</h2>
                    <form>
                        <div class="form-group">
                            <label for="email">E-posti aadress:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Liitu</button>
                    </form>
                </div>
            </div>
        </div>';

      
    }
    createNewsletterForm();
    ?>

</body>
</html>
