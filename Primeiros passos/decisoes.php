<?php
$idade=17;
$numeroDePessoas=2;
echo "voce so pode entrar se tiver mais que 18 anos " . PHP_EOL;

if ($idade>=18) {
  echo"Você tem $idade anos" . PHP_EOL;
  echo "Pode entrar";
} else if ($idade >=16 and $numeroDePessoas>1) {
  echo "Você tem $idade anos mas está acompanhado, pode entrar";}
  else{
  echo"Você só tem $idade anos , não pode entrar";}