<?php

include_once('./CarrinhoCompras.php');
include_once('./DescontoPercentualTotal.php');
include_once('./DescontoPorQuantidade.php');
include_once('./DescontoStrategy.php');
include_once('./Item.php');


$carrinho = new CarrinhoCompras();
$carrinho->adicionarItem(new Item('Peregrino',10.1,1));
$carrinho->adicionarItem(new Item('A cruz e o Punhal',9.9,10));
$carrinho->adicionarItem(new Item('Em defesa da Graça',10.9,2));
$carrinho->adicionarItem(new Item('O vinho novo é melhor',10.9,2));


$carrinho->adicionarRegraDesconto(new DescontoPorQuantidade(2,10));
$carrinho->adicionarRegraDesconto(new DescontoPercentualTotal(0.0));

echo "Itens no carrinho:\n";
foreach ($carrinho->listarItens() as $item) {
    echo "- " . $item->getNome() . ": R$ " . number_format($item->getPreco(), 2) . 
         " x " . $item->getQuantidade() . " = R$ " . number_format($item->getValorTotal(), 2) . "\n";
}

echo "\nValor Total: R$ " . number_format($carrinho->getValorTotal(), 2) . "\n";
echo "Total de Desconto: R$ " . number_format($carrinho->calcularDescontoTotal(), 2) . "\n";
echo "Valor Final: R$ " . number_format($carrinho->getValorFinal(), 2) . "\n";




