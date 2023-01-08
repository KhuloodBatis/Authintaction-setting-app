<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return View::make('home');
        return File::get(public_path('index.php'));
    }

    public function home()
    {
        // Example $example
        // $example =  resolve(Example::class);
        // dd($example);
        // dd(resolve('App\Example'), resolve('App\Example'));

        //?fasad

        // return Request::input('name');

        // return File::get(public_path('index.php'));
        // return $file->get(public_path('index.php'));

        //

        Cache::remember('foo', 60, fn () => 'foobar');

        return cache('foo');
    }
}
