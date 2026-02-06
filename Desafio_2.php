<?php

$valor1 = "10";
$valor2 = "5";

$numeros = ['um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove', 'vinte'];

if (is_int($valor1) && is_int($valor2)) {
    $soma = $valor1 + $valor2;
    echo "Resultado: " . $numeros[$valor1 - 1] . " mais " . $numeros[$valor2 - 1] . " é igual a " . $numeros[$soma - 1];
} else {
    echo "Valores inválidos.";
}
