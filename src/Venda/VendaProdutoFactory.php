<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Venda\Venda;
use Alura\DesignPattern\Venda\VendaFactory;
use Alura\DesignPattern\Venda\VendaProduto;
use DateTimeImmutable;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): \Alura\DesignPattern\Impostos\Imposto
    {
        return new Icms();
    }
}