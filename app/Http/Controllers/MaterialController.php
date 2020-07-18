<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materiais;

class MaterialController extends Controller
{
    public function index(){
        $materiais = Materiais::where("categoria_id", 1)->where("status",1)->get();
        return view('site.materiais.index',compact("materiais"));
    }

    public function ferramentas($id = null){
        $eixo = Materiais::where("categoria_id", 2)->where("status",1)->count();
        $eixo1 = Materiais::where("categoria_id", 2)->where("status",1)->where('eixo', 1)->count();
        $eixo2 = Materiais::where("categoria_id", 2)->where("status",1)->where('eixo', 2)->count();
        $eixo3 = Materiais::where("categoria_id", 2)->where("status",1)->where('eixo', 3)->count();
        $eixo4 = Materiais::where("categoria_id", 2)->where("status",1)->where('eixo', 4)->count();
        $eixo5 = Materiais::where("categoria_id", 2)->where("status",1)->where('eixo', 5)->count();

        switch ($id) {
            case '':
                $titulo = 'Todos os Conteúdos';
                break;
            
            case '1':
                $titulo = 'Eixo 1 - Governança';
                break;
            
            case '2':
                $titulo = 'Eixo 2 - Comunicação';
                break;
                
            case '3':
                $titulo = 'Eixo 3 - Vigilância';
                break;
            
            case '4':
                $titulo = 'Eixo 4 - Assistência';
                break;
                
            case '5':
                $titulo = 'Eixo 5 - Impactos Fiscais';
                break;

            default:
                $titulo = 'Indefinido';
                break;
        }
        
        if($id != ""){
            $eixos = Materiais::where("categoria_id", 2)->where("status",1)->where("eixo",$id)->get();
            return view('site.ferramentas.index',compact("eixos","titulo",'eixo',
                'eixo1','eixo2','eixo3','eixo4','eixo5'));
            
            
        }else{
    
        $eixos = Materiais::where("categoria_id", 2)->where("status",1)->get();
        
        return view('site.ferramentas.index',compact("eixos","titulo",'eixo',
                'eixo1','eixo2','eixo3','eixo4','eixo5'));
         }
    }
}
