# Projeto Base para novos projetos

## Descrição

Projeto base para novos projetos, com a utilização opcional do vue nas páginas.

## Tecnologias

PHP8.3, Laravel11, Vue3.

## Instalação:

### Linux
Abrir um terminal:
```bash
git clone https://github.com/fernando-fix/projeto-modelo.git &&
cd projeto-modelo &&
cp .env.example .env
composer install
composer adminlte:install
php artisan key:generate
nano .env
php artisan migrate --force
php artisan serve
```
Em outro terminal:
```bash
npm install
npm run dev
```

### Windows
Editar copiar manualmente o .env e editar no vscode

### Atualizar o layout master.blade.php:

caminho:
vendor/jeroennoten/laravel-adminlte/resources/views/master.blade.php

Adicionar na tag <body>:
>id="app"

Adicionar antes do fechamento da tag <body>:
>@vite('resources/js/app.js')

Exemplo:
```html
<body id="app">
    <!-- Conteúdo -->
    @vite('resources/js/app.js')
</body>
```
