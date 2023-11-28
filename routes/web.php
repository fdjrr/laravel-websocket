<?php

use App\Events\HelloEvent;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/send-event', function (Request $request) {
    $text = $request->text;

    if ($text) {
        broadcast(new HelloEvent($text));
    }

    return '?text={text}';
});
