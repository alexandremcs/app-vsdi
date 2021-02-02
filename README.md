# App VSDI
> Este tutorial apresenta como instalar a aplicação.
## Instalação
Processo de instalação.

```bash
# Instalando as dependências globais.
composer global require laravel/installer

# Criação do projeto no CLI do Laravel.
composer create-project laravel/laravel app-vsdi

# Entrar na pasta do projeto
cd app-vsdi

# Instalando o template engine Twig	
composer require "twig/twig:^3.0"

# Rodando o servidor de testes
php artisan server

```