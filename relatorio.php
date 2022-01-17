<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$pedido = new Pedido();
$pedido->nomeCliente = 'Franklyn de Quadros';
$pedido->dataFinalizacao = new DateTimeImmutable();


$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExpostadoXml = new ArquivoXmlExportado('pedido');

echo $orcamentoExpostadoXml->salvar($orcamentoExportado);
