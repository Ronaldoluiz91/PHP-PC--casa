<?php

$num = 89;

if ($num < 2) {
    echo "Não é um número primo <hr>";
} else if ($num == 2) {
    echo "É um número primo <hr>";
} else if ($num % 2 == 0) {
    echo "Não é um número primo <hr>";
} else if ($num % 3 == 0 && $num != 3) {
    echo "Não é um número primo <hr>";
} else if ($num % 5 == 0 && $num != 5) {
    echo "Não é um número primo <hr>";
} else if ($num % 7 == 0 && $num != 7) {
    echo "Não é um número primo <hr>";
} else if ($num % 11 == 0 && $num != 11) {
    echo "Não é um número primo <hr>";
} else {
    echo "É um número primo <hr>";
}





// Função para verificar se um número é primo
// function primo($num) {
//     // Se o número for menor que 2, não é primo
//     if ($num < 2) {
//         return false;
//     }
//     // Verifica se o número tem divisores além de 1 e ele mesmo
//     for ($i = 2; $i <= sqrt($num); $i++) {
//         if ($num % $i == 0) {
//             return false;
//         }
//     }

//     return true;
// }

// // Verifica se o número é primo e imprime o resultado
// if (primo($num)) {
//     echo "É um numero primo <hr>";
// } else {
//     echo "Não é um numero primo <hr>";
// }
