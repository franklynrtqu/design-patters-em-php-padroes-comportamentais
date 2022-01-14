<?php

namespace Alura\DesignPattern;

use Exception;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter($this->orcamentos, function($o) {
            return get_class($o->estadoAtual) === 'Alura\DesignPattern\EstadosOrcamento\Reprovado';
        }, ARRAY_FILTER_USE_KEY);
    }
}