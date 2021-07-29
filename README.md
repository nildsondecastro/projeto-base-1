### SISTEMA BASE CONFIGURADO COM LOGIN

Sistema Base para projetos configurado em português, com AdminLTE e funcionalides de registro e login de usuários

(ainda não está em Docker)

## Detalhes desenvolvidos e configurados até o momento:

- [x] Template AdminLTE3 adicionado
- [x] Cadastro de usuário
- [x] Login
- [x] Logout
- [x] Mensagens de erro em pt_BR
- [x] Log separado por dias
- [x] Verificação de Email (sempre é necessário configurar o .env)

## Detalhes Interessantes de se adicionar

- [ ] Configuraçao para o Docker
- [ ] Link para recuperação de senha
- [ ] Configurar a mensagem enviada para verificar o email

## Comandos Utilizados na criação

- laravel new projeto 
(na pasta mãe, depois entrou-se na pasta projeto para os comandos seguintes)

- composer install

- npm install

- npm run dev

- php artisan key:generate

- composer require jeroennoten/laravel-adminlte

- composer require laravel/ui

- php artisan ui vue --auth 

- php artisan adminlte:install

- php artisan adminlte:install --only=auth_views 

- npm install

- php artisan migrate

- php artisan db:seed

## Adicionando pt_BR

[Link do tutorial](https://github.com/lucascudo/laravel-pt-BR-localization)

- composer require lucascudo/laravel-pt-br-localization --dev

- php artisan vendor:publish --tag=laravel-pt-br-localization

## Adicionando servidor de e-mail

[Link do tutorial](https://laravel.com/docs/7.x/verification)

Criar o servidor (caso seja gmail precisa permitir apps menos seguros)

Configurar o .env

- php artisan cache:clear

- php artisan config:clear

- php artisan config:cache

 

