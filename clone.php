<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();
$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 500;
$item3 = new ItemOrcamento();
$item3->valor = 500;

$notaFiscal = $builder->paraEmpresa('12312312345', 'Franklyn de Quadros')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacaoes('Esta nota fiscal foi construída com um construtor.')
    ->constroi();

echo $notaFiscal->valor() . PHP_EOL;
echo $notaFiscal->valorImpostos . PHP_EOL;

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();

var_dump($notaFiscal2, $notaFiscal);