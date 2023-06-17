<?php


use Elasticsearch\ClientBuilder;
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

Route::get('check-recursion', [\App\Http\Controllers\Recursion\RecursionController::class, 'index']);

Route::resource('customers', \App\Http\Controllers\CustomerController::class);

Route::get('/book', [\App\Http\Controllers\polymorphism\BookController::class, 'index']);

//Design pattern
Route::get('/factory', [\App\Http\Controllers\pattern\FactoryController::class, 'index']);
Route::get('/adapter', [\App\Http\Controllers\pattern\PatternController::class, 'adapter']);
Route::get('/singleton-pattern', [\App\Http\Controllers\pattern\PatternController::class, 'singlePattern']);
Route::get('/decorator-pattern', [\App\Http\Controllers\pattern\PatternController::class, 'decorator']);
Route::get('/facade-pattern', [\App\Http\Controllers\pattern\PatternController::class, 'facadePattern']);
Route::get('/strategy-pattern', [\App\Http\Controllers\pattern\PatternController::class, 'strategyPattern']);

Route::get('/foo', function (\App\Foo $foo) {
    return $foo->hello(); // Hello World
});

Route::get('/pay-by-pal', function (\App\PaymentProcessorInterface $paymentProcessor) {
    return $paymentProcessor->pay(); // Hello World
});

Route::get('/pay', [\App\Http\Controllers\PaymentController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
