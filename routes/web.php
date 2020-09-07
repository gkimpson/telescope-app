<?php

use App\Events\SomeEvent;
use App\Jobs\SomeJob;
use App\Notifications\InvoicePaid;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('jobs/{jobs}', function ($jobs) {
    $user = User::find(1);

    for ($i=0; $i < $jobs ; $i++) { 
        SomeJob::dispatch($user);
    }

    return 'Jobs processing';
});

Route::get('/error', function () {
    $user = Auth::user();
    throw new \Exception("Error Processing Request {$user->id}", 1);
});

Route::get('/dumps', function () {
    $user1 = User::find(1)->toArray();
    $user2 = User::find(2)->toArray();
    $user3 = User::find(3)->toArray();

    dump($user1);
    // do some other stuff in the application
    dump($user2);
    // do some other stuff in the application
    dump($user3);
    return 'All Dumps completed 💩💩!';
});

Route::get('/ddumps', function () {
    $user = User::find(3);
    dd($user);
});

Route::get('/delete', function () {
    $user = User::find(4)->delete();
    return 'Deleted user';
});

Route::get('/update', function () {
    $user = User::find(1);
    $user->name = 'admin';
    $user->save();
    return 'updated user';
});

Route::get('/events', function () {
     event(new SomeEvent(User::find(1)));
     return 'Event fired';
});

Route::get('/notifications', function () {
    $user = User::find(1);
    $user->notify(new InvoicePaid());
    return 'Notification sent';
});

Route::get('/cache', function () {
    $value = Cache::remember('user', 20, function() {
        return User::find(1);
    });

    return 'User cached for 20 secs';
});