<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{    
    public function index()
    {
        return view('noticia.index');
    }

    public function lista()
    {
        return view('site.noticias.index');
    }

    public function post()
    {
        return view('site.posts.index');
    }
}
