<?php



function sacar(array $conta,float $valor): array 
{
  if($valor>$conta['saldo']){
    exibeMensagem("Você não pode sacar");
  }else {
    $conta['saldo']-=$valor;}

  return $conta;
}

function exibeMensagem($mensagem)
{
  echo $mensagem . '<br>';
}

function depositar(array $conta, float $valor): array
{
  if ($valor>0){
    $conta['saldo']+=$valor;
}else {
    exibeMensagem("Valores precisam ser positivos");
}
  return $conta;
}

function titularComLetrasMaiscula(array &$conta)
{
 $conta['titular']=mb_strtoupper($conta['titular']);
}