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
// Função para verificar se um número é divisível por 2
function verificarDivisibilidadePorDois($numero) {
    if ($numero % 2 == 0) {
        echo "Valor divisível por 2\n";
    } else {
        echo "O valor não é divisível por 2\n";
    }
}

//  número que você deseja verificar aqui
$numero = 9;

verificarDivisibilidadePorDois($numero);

//ex2
?>


</body>
</html>
