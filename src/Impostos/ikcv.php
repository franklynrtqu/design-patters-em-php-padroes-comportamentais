<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class ikcv extends ImpostoCom2Aliquotas
{

    private ImpostoCom2Aliquotas $impostoCom2Aliquotas;

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $this->impostoCom2Aliquotas->calculaImposto($orcamento);
    }

    protected function deveAplicarTaxaMaxima(ORcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}