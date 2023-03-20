<?php

namespace App\Http\Controllers\polymorphism;

use App\Http\Controllers\Controller;
use App\Polymorphism\Author;
use App\Polymorphism\Editor;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Author $author, Editor $editor)
    {
      return  $editor->calcAmount(200);
    }
}
