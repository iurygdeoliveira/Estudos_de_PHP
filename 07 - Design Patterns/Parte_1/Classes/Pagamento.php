<?php

declare(strict_types=1);

namespace classes;

class Pagamento
{

    public static function pagarComCartao($valor)
    {
        echo "Pago com cartão! Valor: " . $valor;
    }

    public static function pagarComBoleto($valor)
    {
        echo "Pago com Boleto! Valor: " . $valor;
    }
}