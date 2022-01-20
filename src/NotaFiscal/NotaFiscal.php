<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeImmutable  $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        return array_reduce($this->itens,
            function (float $valorAcumulado, ItemOrcamento $itemAtual) {
                return $valorAcumulado + $itemAtual->valor;
            } ,
            0
        );
    }

    // Após e execução da função "clone" que é chamada no arquivo "clone.php",
    // é chamado automaticamente pelo PHP o método __clone, onde nele, podemos definir
    // alguns novo valor para o objeto que acabou de ser clonado, como por exemplo, em vez
    // de considerar a data e hora do bojeto original, pegar a data e hora do momento da clonagem.
    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}