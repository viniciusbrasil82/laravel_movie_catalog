# Catálogo de Filmes
## Laravel 13 - PHP 8.5

API REST simples em Laravel para gerenciar um catálogo de filmes.

## Estrutura das respostas JSON (padrão adotado)

Foi usada a estrutura padrão de resposta do Laravel, sem customização. 

## Estratégia de paginação

Foi usada a estrutura padrão do Laravel, sem customização.

## Estratégia de validação

Eloquent é usado para evitar SQL Injection, apenas usuários logados podem cadastrar filmes. Usuários só podem modificar filmes que eles mesmos criaram _(para esse controle, foi criada uma Policy chamada MoviePolicy)_. 

## Como o controle de permissão foi implementado

Para o controle de permissão, foi usado o Sanctum. O modo mais simples de adicionar usuários diretamente à base é usar um Seeder. _(Pode ser usado o UserSeeder como base)._

## Listagem e ordenação

Os campos release_year e title podem ser usados para ordenação (seja asc ou desc). Caso não seja definido, os últimos cadastros apareceram primeiro.

ex: **?sort=release_year&dir=asc|desc**

