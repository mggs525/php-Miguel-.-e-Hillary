<?php
$carne = "Picanha";
$kg = 6;
$cartao = true;

if ($carne == "Filé Duplo") {
    $preco = ($kg <= 5) ? 4.90 : 5.80;
} elseif ($carne == "Alcatra") {
    $preco = ($kg <= 5) ? 5.90 : 6.80;
} else {
    $preco = ($kg <= 5) ? 6.90 : 7.80;
}

$total = $kg * $preco;
if ($cartao) {
    $total *= 0.95;
}

echo "Carne: $carne\n";
echo "Quantidade: $kg Kg\n";
echo "Total: R$ $total\n";
?>