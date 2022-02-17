<?php

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';
include_once 'classes/ContaCorrente.class.php';

$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, '10/04/1976', "Ensino Médio", 560.89);

echo "Manipulando o objeto {$carlos->Nome}: <br>";

$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 567.89, 200.00);
$contas[2] = new ContaPoupanca(6677, "CP.1234.57", "10/07/02", $carlos, 9876, 500.00, '10/07');

foreach ($contas as $key =>$conta)
{
    echo "Manipulando a conta $key de: {$conta->Titular}<br>";
    echo "O saldo atual da conta $key é R$ {$conta->ObterSaldo()}<br>";
    $conta->Depositar(200);
    echo "O saldo atual da conta $key é R$ {$conta->ObterSaldo()}<br>";
    $conta->Retirar(100);
    echo "O saldo atual da conta $key é R$ {$conta->ObterSaldo()}<br>";
}
?>