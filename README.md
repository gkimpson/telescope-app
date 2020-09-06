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
- Navigate to Console/Kernel.php & change the schedule function to $schedule->command('inspire')->everyMinute()->storeOutput()
- crontab -e & add this to the first line, use :wq to save & close in vim
- * * * * * cd /Users/gavin/Projects/telescope-app && php artisan schedule:run >> /dev/null 2>&1 
- EDITOR=nano crontab -e
- JOBS TAB...
- php artisan make:job SomeJob
- Navigate to /jobs/1 in the browser... and view Jobs tab again (try horizon if possible)
- EXCEPTIONS TAB...
- throw any exception OR run a php artisan command with an incorrect parameter
- e.g /error route
- DUMPS TAB...
- debug data without stopping the execution of the script dump-server isn't installed by default
- https://beyondco.de/docs/laravel-dump-server/installation
- composer require --dev beyondcode/laravel-dump-server
- php artisan vendor:publish --provider="BeyondCode\DumpServer\DumpServerServiceProvider"
- php artisan dump-server 
- php artisan dump-server --format=html > dump.html (DO NOT SHOW THIS)
- Now you can put regular dump statements in your code. Instead of dumping the output directly in the HTTP response, the dumped data will be shown inside of your terminal / the running artisan command. This is very useful, when you want to dump data from API requests, without having to deal with HTTP errors
- QUERIES TAB...
- Drill down and view sql query in a clean format & ability to log slow queries at ease
- Change line 143 in telescope.php 'slow' => 0.4 & reload some requests
- MODELS TAB...
- Records all the CRUD options for your models along with request other useful info
- EVENTS TAB...
- php artisan make:event SomeEvent
- open SomeEvent.php and add implements ShouldBroadcast to the class declaration
- Change the SomeEvent.php as follows :
    public $user;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
- Now hit the events route
- 


### Tags in git
creating :
git tag -a v1.4 -m "my version 1.4" e.g annotated
git push origin --tags
git checkout v2.0.0

1.0 - laravel setup
1.1 - telescope setup
1.2 - scheduler setup
1.3 - jobs done and before laravel horizon install
1.4 - 

### Users (password is password)
admin@admin.com
user1@app.com
user2@app.com