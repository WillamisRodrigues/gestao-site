<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        return view('banner.index');
    }

    public function site()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();

        return view('site.index',compact('noticias'));
    }
}
