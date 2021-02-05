# App VSDI
> Este tutorial apresenta como instalar a aplicação.
## Instalação
Processo de instalação do ambiente.

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
## Uso da aplicação

1.	Acessar a pasta da aplicação pelo terminal
2.	Executar o comando ‘php artisan serve’ 
3.	Acessar a raiz da aplicação pelo navegador: localhost:8000/ 
4.	A aplicação retorna a view home.twig
![](/img/home.twig.png)
5.	Entrar com o login desejado 
![](/img/home.twig(login).png)
6.	Caso seja um login existente:
a.	A aplicação acessa a rota /{login}
b.	Consome a API rest do GitHub
c.	Grava o endpoint no arquivo /public/log.txt
d.	E exibe as informações do usuário e seus respectivos repositórios públicos na view repos.twig
![](/img/repos.twig.png)
7.	Caso seja um login inexistente:
a.	A aplicação faz o mesmo processo nº 6, porém exibe a view 404.twig, informando que o usuário não existe e solicitando um login existente.
![](/img/404.twig.png)
