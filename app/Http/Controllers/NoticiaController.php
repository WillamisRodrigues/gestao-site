<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
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

    public function listaNoticias(){
        $noticias = Noticia::all();

        return Datatables::of($noticias)->addColumn('action', function ($noticia) { 
            $action = '<button type="button"  name="edit_noticia" data-id="' . $noticia->id . '" class="edit_noticia btn btn-primary btn-md"> <i class=""></i> Editar </button>';
            return $action;

        })->addColumn('status', function ($noticia) {
            if ($noticia->status == 0) {
                $status = "Ativo";
            } else {
                $status = "Desativado";
            }
            return $status;

        })->rawColumns(['action', 'status'])->make(true);
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

    public function post9()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-9',compact('noticias'));
    }

    public function post10()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-10',compact('noticias'));
    }

    public function post11()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-11',compact('noticias'));
    }

    public function post12()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-12',compact('noticias'));
    }

    public function post13()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-13',compact('noticias'));
    }

    public function post14()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-14',compact('noticias'));
    }

    public function post15()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-15',compact('noticias'));
    }

    public function post16()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-16',compact('noticias'));
    }

    public function post17()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-17',compact('noticias'));
    }

    public function post18()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-18',compact('noticias'));
    }

    public function post19()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-19',compact('noticias'));
    }

    public function post20()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-20',compact('noticias'));
    }

    public function post21()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-21',compact('noticias'));
    }

    public function post22()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-22',compact('noticias'));
    }

    public function post23()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-23',compact('noticias'));
    }

    public function post24()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-24',compact('noticias'));
    }
    
    public function post25()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-25',compact('noticias'));
    }

    public function post26()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-26',compact('noticias'));
    }

    public function post27()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-27',compact('noticias'));
    }

    public function post28()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-28',compact('noticias'));
    }

    public function post29()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-29',compact('noticias'));
    }

    public function post30()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-30',compact('noticias'));
    }

    public function post31()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-31',compact('noticias'));
    }

    public function post32()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-32',compact('noticias'));
    }

    public function post33()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-33',compact('noticias'));
    }

    public function post34()
    {
        $noticias = Noticia::orderBy('created_at','desc')->limit(3)->get();
        return view('site.posts.noticia-34',compact('noticias'));
    }
}
