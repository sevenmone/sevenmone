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

    return view('listings.index', ['listings' => $listings]);
});

// single listing

Route::get('/listings/{id}', function($id) {
    return view('listings.listing', [
        'listing' => Listing::find($id)
    ]);
});