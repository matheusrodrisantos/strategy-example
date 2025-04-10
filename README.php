
# 🛒 Projeto Strategy - Carrinho de Compras com Descontos

Este projeto demonstra o uso do **padrão de projeto Strategy** aplicado a um sistema simples de **carrinho de compras com descontos**, desenvolvido em PHP.

---

## 📁 Estrutura de Arquivos

```
/
├── index.php                      # Ponto de entrada da aplicação
├── CarrinhoDeCompras.php         # Classe principal do carrinho de compras
├── Item.php                      # Representa um item no carrinho
├── DescontoStrategy.php          # Interface para as estratégias de desconto
├── DescontoPorQuantidade.php     # Estratégia: desconto baseado na quantidade
├── DescontoPercentual.php        # Estratégia: desconto percentual
```

---

## 🧠 Sobre o Padrão Strategy

O padrão **Strategy** permite definir uma família de algoritmos, encapsulá-los e torná-los intercambiáveis. Neste projeto, isso é aplicado para definir diferentes estratégias de desconto sem acoplar a lógica ao carrinho de compras.

---

## 🔧 Como Usar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repo.git
   cd seu-repo
   ```

2. Execute o projeto:
   ```bash
   php index.php
   ```

---

## 📌 Exemplo de Funcionamento

No arquivo `index.php`, é possível:

- Criar um carrinho
- Adicionar itens
- Aplicar uma estratégia de desconto (quantidade ou percentual)
- Ver o total com e sem desconto

---

## 🧪 Estratégias de Desconto

- **DescontoPorQuantidade**  
  Aplica desconto se o número de itens atingir um limite.

- **DescontoPercentual**  
  Aplica um percentual fixo de desconto no total do carrinho.

---

## 📦 Requisitos

- PHP 8.1 ou superior
- Nenhuma dependência externa

---

## 📚 Conceitos Abordados

- Padrão de projeto Strategy
- Programação orientada a objetos (POO)
- Encapsulamento
- Separação de responsabilidades

---

## 💡 Próximos Passos (Sugestões)

- ✅ Adicionar testes unitários com PHPUnit  
- ✅ Criar mais estratégias de desconto (por valor, por tipo de item, etc.)  
- ✅ Implementar interface web (HTML/CSS/JS ou framework)

---

## 🤝 Contribuições

Sinta-se à vontade para abrir issues, enviar PRs ou sugerir melhorias!

---

> Matheus Rodrigues dos Santos