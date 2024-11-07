<?php

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
//    logger()->channel('telegram')->debug('Hello world');
//    abort('123');
//    throw new \App\Services\Exceptions\TelegramBotApiException('123');
    logger()
        ->channel('telegram')
        ->info("123");
    return view('welcome');
});
