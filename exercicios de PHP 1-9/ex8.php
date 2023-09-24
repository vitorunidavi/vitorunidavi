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
// Valor a vista da moto
$valor_a_vista = 8654.00;

// Taxa de juros inicial (1.5%)
$taxa_juros = 1.5;

// Número de parcelas para cada opção
$parcelas = [24, 36, 48, 60];

// Calcula e exibe o valor das parcelas para cada opção
foreach ($parcelas as $num_parcelas) {
    // Calcula o valor da parcela com base na fórmula
    $valor_parcela = ($valor_a_vista / $num_parcelas) + ($valor_a_vista * $taxa_juros / 100);
    
    // Exibe o resultado
    echo "Para $num_parcelas vezes, o valor da parcela é R$ " . number_format($valor_parcela, 2, ',', '.') . "\n";
    
    // Aumenta a taxa de juros em 0.5%
    $taxa_juros += 0.5;
}
?>


</body>
</html>