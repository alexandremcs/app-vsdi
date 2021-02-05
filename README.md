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

# Instalando o TwigBridge para integração da engine com o Laravel
composer require rcrowe/twigbridge

#Configurando o TwigBridge no Laravel
Adicionar o ServiceProvider do TwigBridge ao 'providers' do app.php do Laravel: TwigBridge\ServiceProvider::class, .

Adicionar o facade do TwigBridge ao 'aliases' do app.php do Laravel: 'Twig' => TwigBridge\Facade\Twig::class, .

# Rodando o servidor de testes
php artisan server

```