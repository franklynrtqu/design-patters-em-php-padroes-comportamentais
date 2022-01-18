<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy implements Orcavel
{
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item)
    {
        throw new \DomainException(
            'Não é possível adicionar um item a um orçamento que está no cache.'
        );
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return  $this->valorCache;
    }
}