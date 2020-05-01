<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('conteudo.index');
    }

    public function gestao()
    {
        return view('auth.login');
    }
    
    public function banner()
    {
        return view('banner.index');
    }

    public function webinar()
    {
        return view('webinar.index');
    }
}
