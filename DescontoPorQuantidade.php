<?php

include_once('./DescontoStrategy.php');

class DescontoPorQuantidade implements DescontoStrategy{

    public function __construct(private int $quantidadeMinima, private float $valorDesconto)
    {}

    public function calcular(CarrinhoCompras $compras):float
    {
        if($compras->getQuantidadeItens()>=$this->quantidadeMinima){
            return $this->valorDesconto;
        }
        
        return 0;
    }

}