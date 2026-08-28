<?php
$produto = 100;
$formadepagamento = 4;
$desconto = 0;
$valordacompra = 0;

if ($formadepagamento == 1) {
    $desconto = $produto * 0.10;
    $valordacompra = $produto - $desconto;
    echo "Você recebeu 10% de desconto, sua compra deu R$ $valordacompra";
} elseif ($formadepagamento == 2) {
    $desconto = $produto * 0.05; 
    $valordacompra = $produto - $desconto;
    echo "Você recebeu 5% de desconto, sua compra deu R$ $valordacompra";
} elseif ($formadepagamento == 3) {
    echo "Sua compra deu R$ $produto";
} elseif ($formadepagamento == 4) {
    $valordacompra = $produto + $juros;
    echo "Você recebeu 10% de juros, sua compra deu R$ $valordacompra";
}
?>