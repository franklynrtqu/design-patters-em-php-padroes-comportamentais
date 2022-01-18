<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 300 && $orcamento->quantidadeItens > 3) {
            return $this->ikcv->calculaTaxaMaxima($orcamento);
        }

        return $this->ikcv->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;
    abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;
}

