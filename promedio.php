<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <form action="promedio.php" method="POST">
        <input type="number" name="c1" min="0" max="100" placeholder="Nota 1" required><br>

        <input type="number" name="c2" min="0" max="100" placeholder="Nota 2" required><br>

        <input type="number" name="c3" min="0" max="100" placeholder="Nota 3" required><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];

        if ($c1 < 0 || $c1 > 100 ||
            $c2 < 0 || $c2 > 100 ||
            $c3 < 0 || $c3 > 100) {

            echo "<div class='resultado'>";
            echo "❌ Error: Las notas deben estar entre 0 y 100.";
            echo "</div>";

        } else {

            $promedio = ($c1 + $c2 + $c3) / 3;

            echo "<div class='resultado'>";

            echo "📊 Promedio: " . round($promedio, 2);

            echo "<br><br>";

            if ($promedio >= 70) {
                echo "✅ Estatus: Aprobado";
            } else {
                echo "❌ Estatus: Reprobado";
            }

            echo "</div>";
        }
    }
    ?>

</body>
</html>