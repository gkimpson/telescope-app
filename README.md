## Telescope example
Laravel Telescope is an elegant debug assistant for the Laravel framework. Telescope provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps and more. Telescope makes a wonderful companion to your local Laravel development environment.

My steps:
- composer require laravel/telescope
- php artisan telescope:install
- php artisan migrate



### Tags in git
creating :
git tag -a v1.4 -m "my version 1.4" e.g annotated

git push origin --tags

git checkout v2.0.0