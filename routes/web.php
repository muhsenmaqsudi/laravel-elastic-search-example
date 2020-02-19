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

use App\Article;

Route::get('/', function () {
//    \App\Article::createIndex($shards = null, $replicas = null);
//    \App\Article::putMapping($ignoreConflicts = true);
//    \App\Article::addAllToIndex();
    \App\Article::reindex();

    return view('welcome');
});

Route::get('/search', function () {
    return \App\Article::searchByQuery(['match' => ['title' => 'Sed']]);
});
