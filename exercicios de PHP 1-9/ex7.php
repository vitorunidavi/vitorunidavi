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
// Valor a vista do carro
$valor_a_vista = 22500.00;

// Valor de cada parcela do financiamento
$valor_parcela = 489.65;

// Número de parcelas
$num_parcelas = 60;

// Calcula o valor total do financiamento
$valor_total_financiamento = $valor_parcela * $num_parcelas;

// Calcula os juros pagos por Mariazinha
$juros_pagos = $valor_total_financiamento - $valor_a_vista;

// Exibe o valor dos juros pagos
echo "Mariazinha pagará R$ " . number_format($juros_pagos, 2, ',', '.') . " em juros no financiamento em comparação com o valor a vista do carro.";
?>



</body>
</html>