<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->middleware('auth');

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
Route::get('/', [HomeController::class, 'home']);
