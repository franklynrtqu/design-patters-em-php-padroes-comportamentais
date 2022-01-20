<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\CriadorDePedido;
use Alura\DesignPattern\Pedido\Pedido;
use Alura\DesignPattern\Pedido\TemplatePedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Franklyn de Quadros',
        date('Y-m-d'),
        $orcamento
    );
}

echo memory_get_peak_usage();