<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('welcome');
});

// hello route
Route::get('/hello', function () {
    return '<h1>Hello, World!</h1>';
});

// listings route
Route::get('/listings', function () {
    $listings = Listing::all();

    dd(Listing::find(2));

    return view('listings.index', ['listings' => $listings]);
});
