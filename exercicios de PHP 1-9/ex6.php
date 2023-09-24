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
// Defina os preços por quilograma para cada produto
$preco_macas = 3.0;
$preco_melancia = 2.5;
$preco_laranja = 1.0;
$preco_repolho = 2.0;
$preco_cenoura = 1.5;
$preco_batatinha = 2.0;

// Defina as quantidades em quilogramas de cada produto comprado por Joãozinho
$quantidade_macas = 12;
$quantidade_melancia = 3;
$quantidade_laranja = 1.5;
$quantidade_repolho = 1.1;
$quantidade_cenoura = 1.2;
$quantidade_batatinha = 0.5;

// Calcule o valor gasto com cada produto
$gasto_macas = $preco_macas * $quantidade_macas;
$gasto_melancia = $preco_melancia * $quantidade_melancia;
$gasto_laranja = $preco_laranja * $quantidade_laranja;
$gasto_repolho = $preco_repolho * $quantidade_repolho;
$gasto_cenoura = $preco_cenoura * $quantidade_cenoura;
$gasto_batatinha = $preco_batatinha * $quantidade_batatinha;

// Calcule o valor total da compra
$total_compra = $gasto_macas + $gasto_melancia + $gasto_laranja + $gasto_repolho + $gasto_cenoura + $gasto_batatinha;

// Valor disponível com Joãozinho
$valor_disponivel = 50.0;

// Verifique se o dinheiro é suficiente e exiba uma mensagem apropriada
if ($total_compra < $valor_disponivel) {
    echo "Joãozinho gastou R$ $total_compra na feira. Ele ainda pode gastar R$ " . number_format(($valor_disponivel - $total_compra), 2, ',', '.') . ".";
} elseif ($total_compra > $valor_disponivel) {
    $excesso = number_format(($total_compra - $valor_disponivel), 2, ',', '.');
    echo "<span style='color: red;'>Joãozinho gastou R$ $total_compra na feira, excedendo seu orçamento em R$ $excesso.</span>";
} else {
    echo "<span style='color: green;'>Joãozinho gastou exatamente R$ $total_compra na feira. Seu saldo para compras foi esgotado.</span>";
}
?>


</body>
</html>