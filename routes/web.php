<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PymentsController;
use App\Http\Controllers\UserNotificationController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home')
    ->middleware('auth');

// Route::

//?how service contianer work ?
// Route::get('/', function () {
//     $container = new \App\Container();

//     $container->bind('example', function () {
//         return new \App\Example();
//     });

//     $example = $container->resolve('example');
//     $example->go();
// });

//?how will work with new service

// app()->bind('example', function () {
//     $foo = config('services.foo');
//     return  new \App\Example($foo);
// });


// Route::get('/', function () {
//     $example =  resolve('example');
//     dd($example);
// });

//?how use AppServiceProvider

// app()->bind('App\Example', function () {
//     $collaborator = new \App\Collaborator();
//     $foo = 'foobar';
//     return  new \App\Example($collaborator, $foo);
// });
//?go AppServiceProvider
// Route::get('/', [HomeController::class, 'home']);


//? how send email

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);

//?pyments

Route::get('pyments/create', [PymentsController::class, 'create'])->middleware('auth');
Route::post('pyments', [PymentsController::class, 'store'])->middleware('auth');
Route::get('notifications', [UserNotificationController::class, 'show'])->middleware('auth');
