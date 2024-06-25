<?php

//1

$nome = "João";
$profissao = "Eletricista";

echo "A profissão de " . $nome . " é " . $profissao ;

echo "<hr>";
//2

$senha = "senha123";
$senha2 = strlen($senha);
echo $senha2;

echo "<hr>";

if($senha = strlen(8)){
    echo "Senha invalida ";
}
else {
    echo "A senha é valida";
}

echo "<hr>";

//3

$palavra = "ExEmPlO" ;
$palavraMinuscula = strtolower($palavra);
echo $palavraMinuscula;

echo "<hr>";

//4

$link = " www.exemplo.com ";
$novoLink = trim($link);
echo $novoLink;

echo "<hr>";

//5

$palavra = "abc123";
$palavraRev = strrev($palavra);
echo $palavraRev;