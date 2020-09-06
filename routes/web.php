<?php

use App\Jobs\SomeJob;
use App\User;
use Illuminate\Support\Facades\Route;

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

Route::get('error/', function () {
    throw new \Exception("Error Processing Request", 1);
});

Route::get('dumps/', function () {
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

Route::get('ddumps/', function () {
    $user = User::find(3);
    dd($user);
});

Route::get('delete/', function () {
    $user = User::find(4)->delete();
    return 'Deleted user';
});

Route::get('update/', function () {
    $user = User::find(1);
    $user->name = 'Mr Admin';
    $user->save();
    return 'updated user';
});