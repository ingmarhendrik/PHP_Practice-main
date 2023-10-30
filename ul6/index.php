<!--Ülesanne 6 -- Ingmar Hendrik Rohusaar. 29.oktoober -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ülesanne 6</title>
</head>
<body class="container mt-5">

    <!-- Number list and horizontal rule -->
    <div class="row">
        <div class="col-12 col-md-6">
            <?php
            $count = 0;
            echo '<h3>Number List:</h3>';
            for ($i = 1; $i <= 100; $i++) {
                $count += 1;
                echo $i . ". ";
                if ($count == 10) {
                    echo "<br>";
                    $count = 0;
                }
            }
            ?>
        </div>
        <div class="col-12 col-md-6">
            <hr class="d-md-none">
            <h3>Asterisk Lines:</h3>
            <!-- Vertical lines of asterisks -->
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "*";
            }
            echo "<br>";
            // Vertical lines of asterisks with line breaks
            for ($i = 1; $i <= 100; $i++) {
                echo "*<br>";
            }
            ?>
        </div>
    </div>

    <!-- Ruut -->
    <div class="mt-4">
        <h3>Ruudu suuruse määraja</h3>
        <form action="" method="get">
            <div class="form-group">
                <label for="square">Külje pikkus</label>
                <input type="text" class="form-control" id="square" name="square">
            </div>
            <button type="submit" class="btn btn-primary">Sisesta</button>
        </form>
        <?php
        if (isset($_GET['square'])) {
            $square = $_GET['square'];
            if (is_numeric($square)) {
                $square = intval($square);
                echo '<h3>Ruut:</h3>';
                // Print a square of asterisks based on user input
                for ($i = 0; $i < $square; $i++) {
                    for ($j = 0; $j < $square; $j++) {
                        echo '*';
                    }
                    echo '<br>';
                }
            }
        }
        ?>
    </div>

    <!-- Kahanev ja kolmega jagunevad -->
    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Kahanevad paarisarvud:</h3>
            <?php
            for ($i = 10; $i >= 0; $i--) {
                if ($i % 2 == 0) {
                    echo $i . "<br>";
                }
            }
            ?>
        </div>
        <div class="col-md-6">
            <h3>Kolmega jagunevad arvud:</h3>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0) {
                    echo $i . "<br>";
                }
            }
            ?>
        </div>
    </div>

    <!-- Massiivid ja tsüklid -->
    <div class="mt-4">
        <?php
        $girls = array("Emily", "Sophie", "Julia", "Olivia", "Violet");
        $boys = array("Mark", "Jack", "Tom", "Ryan", "Henry");
        ?>
        <div class="row">
            <div class="col-md-6">
                <h3>Poiste ja tüdrukute paarid:</h3>
                <?php
                for ($i = 0; $i < count($girls); $i++) {
                    echo $boys[$i] . " ja " . $girls[$i] . "<br>";
                }
                ?>
            </div>
            <div class="col-md-6">
                <h3>Suvalised paarid, kus nimed ei kordu:</h3>
                <?php
                $copiedGirls = $girls;
                $copiedBoys = $boys;
                shuffle($copiedGirls);
                shuffle($copiedBoys);
                for ($i = 0; $i < count($girls); $i++) {
                    echo $copiedBoys[$i] . " ja " . $copiedGirls[$i] . "<br>";
                }
                ?>
            </div>
        </div>
    </div>

    
</body>
</html>
