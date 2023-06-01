<?php

use App\Models\listing;
use App\Models\Listing as ModelsListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => listing::all()
    ]);
});

//single Listings
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'heading' => 'Each Listing',
        'listing' => $listing
    ]);
    
});

// Route::get('/hello', function () {
//     return response('<h1>hello world</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/post/{id}', function ($id) {
//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     return($request->name. " " .$request->city);
// });