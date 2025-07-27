<?php
function operation(float $num1, float $num2, string $operation): float|string {
    return match (trim($operation)) { // Remove espaços e quebras de linha
        "soma" => $num1 + $num2,
        "subtrair" => $num1 - $num2,
        "dividir" => $num2 != 0 ? $num1 / $num2 : "Erro: divisão por zero!",
        "multiplicação" => $num1 * $num2,
        default => "Operação inválida!", // Retorno padrão para operações desconhecidas
    };
}

echo "Digite o primeiro número: ";
$num1 = (float) trim(fgets(STDIN)); // Remove a quebra de linha e converte para float
echo "Digite o segundo número: ";
$num2 = (float) trim(fgets(STDIN));
echo "Digite a operação (soma, subtrair, dividir, multiplicação): ";
$operation = trim(fgets(STDIN));

$resultado = operation($num1, $num2, $operation);
echo "Resultado: $resultado\n";
?>