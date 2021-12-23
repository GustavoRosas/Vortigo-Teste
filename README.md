# Vortigo - Teste prático - Analista desenvolvedor PHP PLENO

### Requisitos:
- PHP
- Banco de dados
- Laravel 7/8
- Utilizar Migrations
- Utilizar Cache
- Utilizar Login/Autenticação

### Plus++
- Testes unitários e/ou de integração

---

## Descrição do teste

Desenvolver uma API para cadastro de vendas para vendedores e calcular a comissão destas vendas (a comissão será de 6.5% sobre o valor da venda)

### Endpoints

Todos os retornos devem ser em formato json

> Criar vendedor

##### Parâmetros
- Nome
- Email

##### Retorno
- ID
- Nome
- Email

---

> Listar todos os vendedores

##### Retorno
- ID
- Nome
- Email
- Comissão

---

> Lançar nova venda para um vendedor


##### Parâmetros
- ID Vendedor
- Valor da venda

##### Retorno
- ID
- Nome
- Email
- Valor da venda
- Comissão
- Data da venda

---

> Listar todas as vendas de um vendedor

##### Parâmetros
- ID vendedor

##### Retorno
- ID
- Nome
- Email
- Valor da venda
- Comissão
- Data da venda

---

### Forma de entrega:

Crie um fork deste repositório e após finalizado nos envie por email para luiz.ferreira@vortigo.com.br
