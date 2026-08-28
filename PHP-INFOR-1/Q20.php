<?php

$horasTrabalhadasPorDia = 280;
$diasTrabalhados = 4;
$jornadaNormalDiaria = 60;

$totalHorasTrabalhadas = $horasTrabalhadasPorDia * $diasTrabalhados;
$totalJornadaNormal = $jornadaNormalDiaria * $diasTrabalhados;

$horasExtras = $totalHorasTrabalhadas - $totalJornadaNormal;

$descansoAdicionalHoras = $horasExtras * 1.5;

echo "Total de horas trabalhadas: " . $totalHorasTrabalhadas . "h\n";
echo "Jornada normal esperada: " . $totalJornadaNormal . "h\n";
echo "Horas extras realizadas: " . $horasExtras . "h\n";
echo "Descanso adicional: " . $descansoAdicionalHoras . "h\n";

?>