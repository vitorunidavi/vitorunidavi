<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados do servidos</title>
</head>
<body>
    <h1>dados do servidor</h1>
    <?php
// Defina os lados do retângulo em metros
$ladoA = 6;
$ladoB = 7;

// Calcule a área do retângulo
$area = $ladoA * $ladoB;

// Verifique se a área é maior que 10
if ($area > 10) {
    echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
} else {
    echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
}
?>




</body>
</html>