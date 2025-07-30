# 📦 Delivery System - Banco de Dados MySQL
[![MYSQL](https://img.shields.io/badge/MYSQL-4479A1?logo=mysql&logoColor=white&style=for-the-badge)](https://www.mysql.com/)[![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white&style=for-the-badge)](https://www.php.net/)

Projeto acadêmico de modelagem e implementação de um banco de dados completo para um sistema de delivery. Desenvolvido com foco em boas práticas de normalização, integridade referencial e uso geral de SQL.

---

## 👥 Equipe

- Gabriel Henrique 
- Gabriela Ribeiro  
- Júlia Ribeiro  
- Larissa Rocha  
- Vitor Firmino

---

## 🧠 Objetivo

Projetar um banco de dados relacional completo para gerenciar clientes (PF/PJ), restaurantes, produtos, pedidos, entregadores, pagamentos e avaliações em um sistema de delivery.

---

## 🗂️ Conteúdo

- **`modelo-entidade-relacionamento.pdf`**  
  Diagrama ER e descrição das entidades.

- **`modelo-relacional.sql`**  
  Criação de tabelas com chaves primárias e estrangeiras.

- **`inserts-exemplos.sql`**  
  Inserções de dados simulados.

- **`consultas-avancadas.sql`**  
  Consultas SQL com JOINs, GROUP BY, HAVING, LIKE, EXISTS, etc.

- **`procedures-funcoes.sql`**  
  Procedures e funções SQL (ex: cálculo do valor total do pedido).

- **`triggers.sql`**  
  Triggers para validação e histórico.

- **`views.sql`**  
  Views para relatórios e visualizações.

- **`permissoes.sql`**  
  Criação e controle de usuários e permissões.

---

## 🧱 Estrutura Principal

- **Clientes**: Pessoa Física e Jurídica, com preferências alimentares e login.  
- **Pedidos**: Status, data, total, relacionamento com cliente, restaurante, entregador e pagamento.  
- **Produtos**: Nome, descrição, preço, estoque e imagem.  
- **Pagamentos**: Tipos variados (dinheiro, cartão, PIX).  
- **Avaliações**: Ligadas a cliente e restaurante, com nota e comentário.  
- **Entregadores**: Dados de contato e tipo de veículo.  
- **Relacionamentos**: Totalmente normalizados com integridade garantida por chaves estrangeiras.

---

## 📊 Exemplo de Consulta

```sql
SELECT Cliente_idUsuario, COUNT(*) AS quantidade_pedidos
FROM Pedido
GROUP BY Cliente_idUsuario
HAVING COUNT(*) > 3;
## 🚀 Tecnologias Utilizadas

- MySQL 8.x  
- MySQL Workbench  
- SQL Puro (DDL, DML, DQL)  
- Modelagem ER e Relacional  
- Procedures, Functions, Triggers e Views  

## 📈 Consultas Avançadas Incluídas

- JOINs internos e externos  
- Operadores IN, LIKE, BETWEEN, IS NULL  
- Subconsultas com ALL, ANY, EXISTS  
- Ordenações e agrupamentos  
- UNIONs e controle de permissões  

## 🔐 Segurança e Controle

- Controle de acesso com GRANT e REVOKE  
- Usuários personalizados  
- Views e triggers com validações  
