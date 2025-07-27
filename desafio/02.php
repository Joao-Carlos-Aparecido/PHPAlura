<?php
function IMC(float $peso, float $altura): float {
    $altura = $altura / 100; // Converter centímetros para metros, se necessário
    return $peso / ($altura ** 2);
}

$peso = (float) $argv[1]; // Garante que o peso seja um número decimal
$altura = (float) $argv[2];

echo "Deseja calcular o IMC? (sim/não): ";
$perguntar = trim(fgets(STDIN)); // Remover quebra de linha

if ($perguntar === "sim") {
    $imc = IMC($peso, $altura);
    echo "Seu IMC é: $imc\n";

    if ($imc < 18.5) {
        echo "Está magrinho!\n";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo "Está com peso normal!\n";
    } else {
        echo "Está gordinho!\n";
    }
} else {
    echo "Cálculo cancelado.\n";
}
?>

