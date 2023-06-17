<?php

use Illuminate\Support\Facades\Route;

Route::get('comments', function(){
    echo 'Hello from the comment package!';
});

Route::get('add/{a}/{b}', [gias\comments\CommentController::class, 'add']);
Route::get('subtract/{a}/{b}', [gias\comments\CommentController::class, 'subtract']);

