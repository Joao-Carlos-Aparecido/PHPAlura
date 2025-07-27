<?php
    function calcularFParaC($celsius) : float {
        $resultado = ($celsius * 1.8) - 32;
        return $resultado;
    }
    
    function calcularCParaF($fahrenheit) : float {
        $resultado = ($fahrenheit * 1.8) + 32;
        return $resultado;
    }
    echo "qual caluclo: A. f para c/b. c para f \n";
    $perguntar = trim(fgets(STDIN));
    if ($perguntar === "a" ) {
        echo "fale um valor\n";
        $valor = fgets(STDIN);
        $calculo = calcularFParaC($valor);
        echo "o valor é $calculo";
    } elseif ($perguntar === "b" ) {
        echo "fale um valor\n";
        $valor = fgets(STDIN);
        $calculo = calcularCParaF($valor);
        echo "o valor é $calculo";
    } 
?>