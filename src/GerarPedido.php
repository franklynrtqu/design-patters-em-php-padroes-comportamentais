<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getNumeroDeItens(): int
    {
        return $this->numeroDeItens;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }


}