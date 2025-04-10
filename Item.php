<?php

class Item
{

    public function __construct(private string $nome, private float $preco, private int $quantidade) {}


    public function getNome(): string {
        return $this->nome;
    }
    
    public function getPreco(): float {
        return $this->preco;
    }
    
    public function getQuantidade(): int {
        return $this->quantidade;
    }
    
    public function getValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}
