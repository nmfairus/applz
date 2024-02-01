# Sistem E-Aduan
Sistem maklumat bagi laporan kerosakan peralatan ICT dan Aset 

> Untuk kegunaan local intranet

## Usual git command

`git status`
`git log --oneline`
`git branch "newbranch"`
`git checkout "branch"`
`git add .`
`git push -u origin master`
`git commit -m "initial commit"`
`git config --global user.name "eci4ever"`
`git config --global user.email "eci4ever@gmail.com"`
`git push -u origin "newbranch"`
`git fetch`
`git pull`
`git branch --delete <branchname>`
`git branch -a`
`git config --global core.autocrlf false`

## Usual npm command
`npm install`
`npm run dev`
`npm run build`

## Usual Artisan Command
`php artisan migrate`
`php artisan make:request StoreRoleRequest`
`php artisan make:controller UserController --resource`
`php artisan make:model Product -mcr --requests`
`php artisan storage:link`
`php artisan make:seeder UserSeeder`
`php artisan db:seed --class=UserSeeder`

## Installation 
Make sure that you have setup the environment properly. You will need minimum PHP 8.1, MySQL/MariaDB, composer and Node.js.

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure your database credentials
3. Go to the project's root directory using terminal window/command prompt
4. Run `composer install`
5. Set the application key by running `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate:fresh --seed`
7. Run `npm install`
8. Run `npm run build` to build assets
9. Start local server by executing `php artisan serve`

## Composer command
`composer require elibyy/tcpdf-laravel`

test dulu
