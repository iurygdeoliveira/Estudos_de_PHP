<?php

declare(strict_types=1);

namespace classes;

use interfaces\ComidaFactory;
use classes\Comida;

class PizzaFactory implements ComidaFactory
{

    public function criarComida($id): Comida
    {
        if ($id == 0) {
            $p = new Pizza();
            $p->nome = "Pizza de calabresa";
            $p->sabor1 = "calabresa";
            $p->sabor2 = "queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = true;
            return $p;
        } else if ($id == 1) {
            $p = new Pizza();
            $p->nome = "Pizza de frango";
            $p->sabor1 = "frango";
            $p->sabor2 = "queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = true;
            return $p;
        } else {
            $p = new Pizza();
            $p->nome = "Pizza Mista";
            $p->sabor1 = "Presunto";
            $p->sabor2 = "queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = true;
            return $p;
        }
    }
}