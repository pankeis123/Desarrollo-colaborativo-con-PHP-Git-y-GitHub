<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php include 'index.html'; ?>

<h1>Calculadora básica</h1>

<form method="POST">
    <label>Primer número :</label>
    <input type="number" step="any" name="n1" required>

    <label>Segundo número :</label>
    <input type="number" step="any" name="n2" required>

    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = filter_input(INPUT_POST, "n1", FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, "n2", FILTER_VALIDATE_FLOAT);

    if ($a === false || $a === null || $b === false || $b === null) {
        echo "<p>Ingresa dos números válidos.</p>";
    } else {
        echo "<p>Suma: " . ($a + $b) . "</p>";
    }
}
?>
</body>
</html>
