<?php
include_once 'classes/Produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - The Eagles Hotel California';

$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();

echo "<hr>";

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, '10/04/1976', "Ensino Médio", 560.89);
/*
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";
$carlos->Salario = 560.89;
*/

echo "Manipulando o objeto $carlos->Nome :<br>";

echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<br>";
$carlos->Formar('Técnico em Eletricidade');
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<br>";

echo "{$carlos->Nome} possui {$carlos->Idade} anos<br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos<br>";

$conta_carlos = new conta(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 567.89, false);
/*
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;
*/
echo "<br>";
echo "Manipulando a conta de: {$conta_carlos->Titular}<br>";
echo "O saldo atual é de R$ {$conta_carlos->ObterSaldo()}<br>";

$conta_carlos->Depositar(20);
echo "O saldo atual é de R$ {$conta_carlos->ObterSaldo()}<br>";

$conta_carlos->Retirar(10);
echo "O saldo atual é de R$ {$conta_carlos->ObterSaldo()}<br>";
?>