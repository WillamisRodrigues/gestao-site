<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiaController extends Controller
{    
    public function index()
    {
        return view('noticia.index');
    }

    public function lista()
    {
        $noticias = Noticia::orderBy('created_at','desc')->get();
        return view('site.noticias.index',compact('noticias'));
    }

    public function post()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.index',compact('noticias'));
    }

    public function post2()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-2',compact('noticias'));
    }

    public function post3()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-3',compact('noticias'));
    }

    public function post4()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-4',compact('noticias'));
    }

    public function post5()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-5',compact('noticias'));
    }

    public function post6()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-6',compact('noticias'));
    }

    public function post7()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-7',compact('noticias'));
    }

    public function post8()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-8',compact('noticias'));
    }
}
