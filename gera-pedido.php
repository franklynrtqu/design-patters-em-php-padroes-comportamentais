<?php

require "vendor\autoload.php";

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \Alura\DesignPattern\GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido->execute();


