<?php

declare(strict_types=1);

namespace interfaces;

interface Strategy
{
    public function conectar();
    public function salvar();
    public function ler();
}