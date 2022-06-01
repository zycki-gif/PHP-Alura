<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacao
{
  private $totalBonificacoes = 0;

  public function adicionaBonificacaoDe(Funcionario $funcionario)
  {
    $this->totalBonificacoes += $funcionario->calcularBonificacao();
  }

  public function recuperaTotal(): float
  {
    return $this->totalBonificacoes;
  }
}
