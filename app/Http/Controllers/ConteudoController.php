<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Banner;

class ConteudoController extends Controller
{

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

    function action(Request $request)
    {
     
    $validation = Validator::make($request->all(), [
        'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);
     
     if($validation->passes())
     {
        $image = $request->file('select_file');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        
        return response()->json([
            'message'   => 'Image Upload Successfully',
            'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
            'class_name'  => 'alert-success'
        ]);
     }
     else
     {
      
        return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
      }
    }

    public function listaBanners(){
        $banners = Banner::all();

        return Datatables::of($banners)->addColumn('action', function ($banner) { 
            $button = '<button type="button"  name="edit_banner" data-id="' . $banner->id . '" class="edit_banner btn btn-primary btn-md"> <i class=""></i> Editar </button>';
            return $button;

        })->addColumn('status', function ($banner) {
            if ($banner->status == 0) {
                $status = "Ativo";
            } else {
                $status = "Desativado";
            }
            return $status;

        })->rawColumns(['action', 'status'])->make(true);
    }

    public function edit_banner($id)
    {
        $data = Banner::find($id);
        return response()->json(['data' => $data]);
    }

    public function todosmateriais(){
        return view('site.materiais.index');
    }

    public function ferramentas(){
        return view('site.ferramentas.index');
    }

    public function playlist(){
        
        return view('site.playlist.index');
    }

    public function playlistgestao(){
        
        return view('site.playlist.gestao');
    }

    public function playlistsaude(){
        
        return view('site.playlist.saude');
    }

    public function metodologia(){
        
        return view('site.metodologia.index');
    }

    public function cache(){
        return view('cache.get-cache');
    }

    public function cache2(){
        return view('cache.get-cache2');
    }

    public function cache3(){
        return view('cache.get-cache3');
    }

    public function municipios(){
        return view('site.municipio.index');
    }

    public function estados(){
        return view('site.municipio.ajax.index');
    }
    
}
