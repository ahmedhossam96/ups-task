<?php

use App\Http\Controllers\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Portal;
use App\Http\Controllers\Retail;
use App\Http\Controllers\Transportation;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('get_transported_items', [Portal::class, 'getitems']);






Route::get('getreatail', [Retail::class, 'index']);

Route::get('storeretail', [Retail::class, 'store']);

Route::get('updateretail', [Retail::class, 'update']);

Route::get('deleteretail', [Retail::class, 'delete']);


Route::get('getevents', [Transportation::class, 'index']);

Route::get('storeevents', [Transportation::class, 'store']);

Route::get('updateevents', [Transportation::class, 'update']);

Route::get('deletevents', [Transportation::class, 'delete']);


Route::get('getitems', [Items::class, 'index']);

Route::get('storeitems', [Items::class, 'store']);

Route::get('updateitems', [Items::class, 'update']);

Route::get('deleteitems', [Items::class, 'delete']);



