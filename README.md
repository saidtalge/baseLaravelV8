<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Projeto Base - Laravel

Este é um projeto base desenvolvido em Laravel 8 com alguns recursos já implementados, recursos como:

- [Laravel 8](https://laravel.com/docs/8.x)
- [Auth JetStream](https://jetstream.laravel.com/2.x/introduction.html).
- [Request Validation PT-BR](https://github.com/LaravelLegends/pt-br-validator)
- [tailwindtoolbox icons](https://www.tailwindtoolbox.com/icons)
- [DataTables JS](https://datatables.net/)

## Configuração mínima

Este é um projeto base desenvolvido em Laravel 8 com alguns recursos já implementados, recursos como:

- PHP 7.4+
- MySQL 5.7/MariaDB 10.4
- Composer 2.1.9

## Instalação e Configuração

Segue o passo a passo para a instalação e configuração desse projeto em um servidor WEB baseados nas configurações acima.

1. Executar o *git clone https://github.com/saidtalge/baselaravel8.com.br.git* no servidor
2. Entre na basta com o comando *cd baselaravel8.com.br*.
3. Execute o *composer install* para instalação das dependências utilizadas no projeto.
4. Crie o banco de dados, renomeia o arquivo *.env-example* para *.env* e insira as configurações do seu banco de dados.
5. Execute o comando *php artisan key:generate* para criar uma chave
6. Importe o arquivo *bd.sql* para o banco de dados criado anteriormente.
7. Execute o servidor *php artisan serve*.
8. Entre na aplicação com as credenciais *admin@localhost* e senha *12345678*.

## Funcionalidades

1. Autenticação por users.email e users.status
2. Gerenciamento de Usuários

