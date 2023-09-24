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

function calcularValorParcela($valorMoto, $taxaInicial, $numParcelas) {
    $taxaJuros = $taxaInicial / 100; // Convertendo a taxa de juros para decimal
    $denominador = pow(1 + $taxaJuros, $numParcelas) - 1;
    $parcela = $valorMoto * ($taxaJuros * pow(1 + $taxaJuros, $numParcelas)) / $denominador;
    return $parcela;
}

$valorMoto = 10000; // Substitua pelo valor real da moto
$taxaInicial = 2; // Taxa de juros inicial em porcentagem

$opcoesParcelamento = [24, 36, 48, 60];

foreach ($opcoesParcelamento as $numParcelas) {
    $valorParcela = calcularValorParcela($valorMoto, $taxaInicial, $numParcelas);
    echo "Para $numParcelas parcelas com juros de $taxaInicial%, o valor da parcela é: R$" . number_format($valorParcela, 2) . PHP_EOL;
    $taxaInicial += 0.3; // Aumenta a taxa de juros para a próxima opção de parcelamento
}
?>


</body>
</html>