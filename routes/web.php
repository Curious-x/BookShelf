<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/hello', function () {
//     return response('<h1>Hello World!</h1>', 200)
//         ->header('Content-Type', 'text/plain');
// });

// Route::get('/user/{id}', function ($id, Request $request) {
//     ddd($request);
//     return Response('User ' . $id);
// })
//     ->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     dd($request);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view(
        'listings',
        [
            'heading' => "Latest Listing",
            'listings' => Listing::all()
        ]
    );
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view(
        'listing',
        [
            'listing' => Listing::find($id)
        ]
    );
});