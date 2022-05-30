<?php

require 'src/Conta.php';
require 'src/titular.php';
require 'src/cpf.php';

$vinicius= new Titular(new CPF('123.456.789-10'),'Vinicius Dias');
$primeiraConta= new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia=new Titular(new cpf ('698.549.548-10'),'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);


