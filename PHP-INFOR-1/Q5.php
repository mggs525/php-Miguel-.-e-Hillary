<?php
$valorHora = 50.00;
$horasTrabalhadas = 160;
$salarioBruto = $valorHora * $horasTrabalhadas;

if ($salarioBruto <= 900) {
    $percentualIR = 0;
} else if ($salarioBruto <= 1500) {
    $percentualIR = 5;
} else if ($salarioBruto <= 2500) {
    $percentualIR = 10;
} else {
    $percentualIR = 20;
}

$descontoIR = $salarioBruto * ($percentualIR / 100);
$descontoSindicato = $salarioBruto * 0.03;

$totalDescontos = $descontoIR + $descontoSindicato;
$salarioLiquido = $salarioBruto - $totalDescontos;

echo "Salário Bruto: R$ " . $salarioBruto . "\n";
echo "IR (" . $percentualIR . "%): R$ " . $descontoIR . "\n";
echo "Sindicato (3%): R$ " . $descontoSindicato . "\n";
echo "Total de descontos: R$ " . $totalDescontos . "\n";
echo "Salário Líquido: R$ " . $salarioLiquido . "\n"; 
?>