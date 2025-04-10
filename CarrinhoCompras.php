<?php

class CarrinhoCompras{

    private array $itens=[];
    private array $regrasDesconto=[];

    public function adicionarItem(Item $item):void{
        $this->itens[]=$item;
    }

    public function adicionarRegraDesconto(DescontoStrategy $desconto){
        $this->regrasDesconto[]=$desconto;
    }

    public function getValorTotal():float{
        $total=0;
        foreach($this->itens as $item){
            $total+=$item->getValorTotal();
        }
        return $total;
    }

    public function getQuantidadeItens():int{
        $quantidade=0;

        foreach($this->itens as $item){
            $quantidade+=$item->getQuantidade();
        }

        return $quantidade;
    }

    public function calcularDescontoTotal():float{
        $descontoTotal=0;
        foreach($this->regrasDesconto as $regra){
            $descontoTotal+=$regra->calcular($this);
        }
        return $descontoTotal;
    }

    public function getValorFinal():float{
        $desconto=$this->calcularDescontoTotal();
        return max(0,$this->getValorTotal()-$desconto);
    }

    public function listarItens():array{
            return $this->itens;
    }

}