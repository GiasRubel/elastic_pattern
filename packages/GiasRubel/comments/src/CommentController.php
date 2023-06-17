<?php

namespace GiasRubel\comments;

use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function add($a, $b)
    {
        $result =  $a + $b;
        return view('Comment::index', compact('result'));
    }

    public function subtract($a, $b)
    {
        echo $a - $b;
    }
}
