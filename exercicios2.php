<?php

$num = (int)17;

// Função para verificar se um número é primo
function primo($num) {
    // Se o número for menor que 2, não é primo
    if ($num < 2) {
        return false;
    }
    // Verifica se o número tem divisores além de 1 e ele mesmo
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Verifica se o número é primo e imprime o resultado
if (primo($num)) {
    echo "É um numero primo <hr>";
} else {
    echo "Não é um numero primo <hr>";
}

?>



