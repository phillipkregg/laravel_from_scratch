<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Filesystem\Filesystem;

class PagesController extends Controller
{



    public function home() {

        // Cache::remember('foo', 60, function() { return 'foobarstic'; });

        // return Cache::get('foo', 'default');

        // $fileSystem = new Filesystem();

        // return $fileSystem->get(public_path('index.php'));


        //return Request::input('name');

        //return Request::input('name');

        //return View::make('welcome');

        //return File::get(public_path('index.php'));

        return \App\ExampleFacade::handle();

        //return view('welcome');
    }
}
