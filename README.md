## Telescope example
Laravel Telescope is an elegant debug assistant for the Laravel framework. Telescope provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps and more. Telescope makes a wonderful companion to your local Laravel development environment.

My steps:
- composer require laravel/telescope
- php artisan telescope:install
- php artisan migrate
- composer require laravel/ui
- php artisan ui bootstrap --auth
- Please run "npm install && npm run dev" to compile your fresh scaffolding
- Navigate to <yourapp>/telescope e.g 'http://telescope-app.test/telescope'
- Navigate to config/telescope.php & Providers/TelescopeServiceProvider.php
- change to night mode, uncomment the line `Telescope::night();` & reload the telescope app
- mention the gate() in the provider ONLY works in production mode with the added emails in the array
- REQUESTS TAB... 
- shows all the login/post/register & relevant information etc...
- COMMANDS TAB...
- php artisan inspire
- php artisan make:model Todo -a (creates model, factory, seeder, controller, migration etc..)
- SCHEDULER TAB...
- Navigate to Console/Kernel.php



### Tags in git
creating :
git tag -a v1.4 -m "my version 1.4" e.g annotated
git push origin --tags
git checkout v2.0.0

1.0 - laravel setup
1.1 - telescope setup
1.2 - 

### Users (password is password)
admin@admin.com
user1@app.com
user2@app.com