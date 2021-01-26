<?php

declare(strict_types=1);

namespace classes;

use classes\Estoque;
use classes\Entrega;
use classes\Pagamento;

class Facade
{
    public static function finalizarCompra($idProduto, $endereco, $cep, $transportadora, $meioDePagamento)
    {
        $valorDoProduto = Estoque::retornarPrecoDoProdutoPeloID($idProduto);
        $entrega = new Entrega();
        $entrega->endereco = $endereco;
        $entrega->cep = $cep;
        $entrega->transportadora = $transportadora;
        $valorDoFrete = $entrega->calcularFrete();
        $valorTotal = $valorDoProduto + $valorDoFrete;
        if ($meioDePagamento == 1) {
            Pagamento::pagarComCartao($valorTotal);
        } else {
            Pagamento::pagarComBoleto($valorTotal);
        }
    }
}