<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat,
                 ea incidunt, ullam, ipsa earum quia impedit facere est voluptatibus fugit quod a officiis
                  accusamus laudantium cumque sint velit veniam quidem!'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat,
                 ea incidunt, ullam, ipsa earum quia impedit facere est voluptatibus fugit quod a officiis
                  accusamus laudantium cumque sint velit veniam quidem!'
            ]
        ]
    ]);
});

// Route::get('/hello', function () {
//     return response("<h1>Hello There</h1>", 404)
//     ->header('Content-Type', 'Text/plain');
// });

// Route::get('/post/{id}', function ($id){
//     ddd($id);
//     return response('Post' .$id);
// }) -> where('id', '[0-9]+');

// Route::get('/search', function (Request $request ) {
//     dd($request);
// });