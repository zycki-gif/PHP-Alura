<?php


$contasCorrentes=[123456 => ['titular'=> 'Maria',
  'saldo' => '10000'],
  1234567 => ['titular'=> 'Vinicius',
  'saldo' => '1000'],
  12345678 => ['titular'=> 'Alberto',
  'saldo' => '300']
];

$contasCorrentes[]=['titular'=> 'Juliano',
  'saldo' => '100000'];

foreach ($contasCorrentes as $cpf => $conta){
  echo $cpf . PHP_EOL;

}
