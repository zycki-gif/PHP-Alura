<?php

$altura=1.68;
$peso=66;

$imc=$peso/($altura*$altura);

if($imc<18.5){
  echo "Magreza";
} else if($imc<25){
  echo "Normal";
} else {
  echo "Obeso";
}