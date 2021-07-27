<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function (Request $request) {
    $url = 'http://api-training.test/api/users';

    $response = Http::get($url,[
        'search' => $request->search
    ]);

    $users = $response->json()['data'];
    return view('welcome',compact('users'));
});


