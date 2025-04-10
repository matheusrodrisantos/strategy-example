<?php

include_once('./DescontoStrategy.php');

class DescontoPercentualTotal implements DescontoStrategy{

    public function __construct(private float $percentual){}

    public function calcular(CarrinhoCompras $compras):float{
        
        return $compras->getValorTotal()*$this->percentual;
    }

}