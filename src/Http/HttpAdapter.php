<?php

namespace Alura\DesignPattern\Http;

interface HttpAdapter
{
    public function post(strign $url, array $data = []): void;
}