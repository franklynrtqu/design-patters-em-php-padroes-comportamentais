<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial): self
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item): self
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacaoes(string $observacoes): self
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function comDataEmissao(\DateTimeImmutable $dataEmissao): self
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    abstract public function constroi(): NotaFiscal;

}