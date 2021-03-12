<?php

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

// app()->bind('example', function() {
//     // $foo = config('services.foo');
//     return new App\Example();
// });

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', function () {

    //ddd(resolve('App\Example'), resolve('App\Example'));

    return view('welcome');

});

Route::get('/home', 'PagesController@home');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/about', function() {
    $articles = App\Article::latest()->get();


    return view('about', [
        'articles' => $articles
    ]);
});



Route::get('/articles', 'ArticlesController@all')->name('articles.index');
Route::post('/articles/store', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}/update', 'ArticlesController@update');


Route::get('/payments/create', 'PaymentsController@create')->middleware('auth');