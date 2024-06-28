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
cp .env.example .env &&
composer install &&
php artisan key:generate &&
nano .env &&
php artisan migrate --force &&
code . &&
php artisan serve
```
Em outro terminal:
```bash
npm install
npm run dev
```

### Windows
Editar copiar manualmente o .env e editar no vscode
