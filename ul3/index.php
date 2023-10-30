<!--Ülesanne 3 - Ingmar Hendrik Rohusaar. 10.oktoober -->

<!DOCTYPE html>
<html>
<head>
    <title>Trapetsi ja rombi kalkulaator</title>
</head>
<body>
    <h1>Trapetsi ja rombi kalkulaator</h1>
    <form action="" method="get">
        <label for="trapezo_a">Alumine pikkus (a):</label>
        <input type="number" step="0.1" id="trapezo_a" name="trapezo_a" required><br>

        <label for="trapezo_b">Ülemine pikkus (b):</label>
        <input type="number" step="0.1" id="trapezo_b" name="trapezo_b" required><br>

        <label for="trapezo_height">Kõrgus (h):</label>
        <input type="number" step="0.1" id="trapezo_height" name="trapezo_height" required><br>

        <label for="rhombus_side">Rombi külg (s):</label>
        <input type="number" step="0.1" id="rhombus_side" name="rhombus_side" required><br>

        <input type="submit" value="Arvuta">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["trapezo_a"]) && isset($_GET["trapezo_b"]) && isset($_GET["trapezo_height"]) && isset($_GET["rhombus_side"])) {
            $trapezo_a = $_GET["trapezo_a"];
            $trapezo_b = $_GET["trapezo_b"];
            $trapezo_height = $_GET["trapezo_height"];
            $rhombus_side = $_GET["rhombus_side"];

            $area_of_trapezo  = 0.5 * ($trapezo_a + $trapezo_b) * $trapezo_height;
            $perimeter_of_rhombus = 4 * $rhombus_side;

            echo "<p>Trapetsi pindala on " . number_format($area_of_trapezo, 1) . " ruutühikut ja rombi ümbermõõt on " . number_format($perimeter_of_rhombus, 1) . " ühikut.</p>";
        }
    }
    ?>
</body>
</html>
