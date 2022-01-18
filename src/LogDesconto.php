<?php

namespace Alura\DesignPattern;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        // Biblioteca de log.
        echo "Salvando log de desconto: $descontoCalculado";
    }
}