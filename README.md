# Teste Supera

Teste em Laravel. 

## Iniciando

Clone o projeto, usando o comando abaixo (usando https):

```bash
git clone https://github.com/RuanSilva6721/supera_teste.git
```

Depois de clonar, acesse o repositório e instale as dependências com os comandos abaixo (para isso, utilize o [composer](https://getcomposer.org/)):

```bash
cd supera_teste
composer install
```

Após instalar as dependências, duplique o arquivo `.env.example` e renomei um deles para `.env`.

Gere uma nova chave da aplicação:

```bash
php artisan key:generate
```

Altere as configurações no arquivo `.env` para que o projeto se conecte ao banco de dados.

Execute o comando abaixo para que as tabelas sejam criadas no banco de dados:

```bash
php artisan migrate
```

Caso queira dados fictícios no banco, utilize o comando:

```bash
##pacote
composer require pelmered/fake-car --dev

##comandos
php artisan db:seed --class=DatabaseSeeder
php artisan db:seed --class=CarSeeder
php artisan db:seed --class=CarMaintenanceSeeder
```

Inicie o servidor da aplicação com o comando:

```bash
php artisan serve
```
Para ver o projeto em execução acesse seu [http://localhost:8000](http://localhost:8000)



**Caso queira rodar em docker , utilize o comando:**

```bash
##Inicie o docker em sua máquina e depois:
cd laradock
docker-compose up -d nginx mysql phpmyadmin

##
Para ver o projeto em execução acesse seu [http://localhost:8088](http://localhost:8088)

para acessar o phpmyadmin [http://localhost:1010](http://localhost:1010)
#acessar ao phpmyadmin
Sever: mysql
Username: root
Password: root

Você deve mudar a conexão do banco no `.env` para

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=supera
DB_USERNAME=root
DB_PASSWORD=root

Você deve acessar o workspace com o comando:

docker-compose exec --user=laradock workspace bash

Execute o comando abaixo para que as tabelas sejam criadas no banco de dados:

php artisan migrate

```







## Construído com

* [Laravel](https://laravel.com/)
