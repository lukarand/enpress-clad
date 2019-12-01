<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PagesController extends Controller
{
    public function page($page)
    {
        return view('page', [
            'page' => Post::root($page)
        ]);
    }
}