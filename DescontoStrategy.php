<?php


// interface para a estrategia de desconto
interface DescontoStrategy{
    public function calcular(CarrinhoCompras $compras):float;
}





