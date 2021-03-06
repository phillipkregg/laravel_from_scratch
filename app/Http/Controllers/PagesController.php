<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{
    public function home() {

        return Request::input('name');

        //return View::make('welcome');
    }
}
