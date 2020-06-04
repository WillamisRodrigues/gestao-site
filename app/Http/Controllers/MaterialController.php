<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materiais;

class MaterialController extends Controller
{
    public function index(){
        $materiais = Materiais::all();
        return view('site.materiais.index',compact("materiais"));
    }

    public function ferramentas(){
        return view('site.ferramentas.index');
    }
}
