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

## Para subir o ambiente é necessário o Docker configurado

### Comandos

> docker-compose up -d --build
> 
> docker compose exec app sh entrypoint.sh


## Exemplos de Requisição

### Login

> curl --location --request POST 'http://localhost:8000/api/login?null=null&email=user%40email.com&password=teste'

### Listagem

> curl --location 'http://localhost:8000/api/movies'

### Detalhe

> curl --location 'http://localhost:8000/api/movies/1'

### Criar

> curl --location --request POST 'http://localhost:8000/api/movies?title=Teste%20Novo%20Filme&description=teste%20descricao&release_year=1990&poster_url=https%3A%2F%2Fwww.uol.com.br&author_id=1' \
--header 'Authorization: Bearer Mm9efjBJbkwlvfjZ1dWIYOtVZ2pRXg4jjZ2Pgobu527601dc'

### Atualizar

> curl --location --request PUT 'http://localhost:8000/api/movies/3?title=Teste%20Novo%20Filme%202&description=teste%20descricao&release_year=1990&poster_url=https%3A%2F%2Fwww.uol.com.br&author_id=1' \
--header 'Authorization: Bearer Mm9efjBJbkwlvfjZ1dWIYOtVZ2pRXg4jjZ2Pgobu527601dc'

### Apagar

> curl --location --request DELETE 'http://localhost:8000/api/movies/3' \
--header 'Authorization: Bearer Mm9efjBJbkwlvfjZ1dWIYOtVZ2pRXg4jjZ2Pgobu527601dc'

