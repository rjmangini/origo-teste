# TESTE DEV ÓRIGO

tive dificuldade para o container funcionar, e mostra apenas a página principal, não navega pelas outras páginas

entre na pasta do frontend
`ng serve`

entre na pasta do backend - configurar o banco no .env

`php artisan migrate`
`php artisan db:seed`
`php artisan serve`

---

1. Crie a rede do container
   `docker network create personal`

2. Baixe e configure o banco de dados
   https://github.com/rjmangini/mariadb-container

   `docker-compose up --build -d`

3.
