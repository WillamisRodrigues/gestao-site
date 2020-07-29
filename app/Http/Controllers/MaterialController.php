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
                $desc = 'Ferramentas de apoio à gestão aos municípios no combate à pandemia, dividas em 5 eixos: Governança, Comunicação, Vigilância, Assistência e Impactos Fiscais.';
                break;
            
            case '1':
                $titulo = 'Eixo 1 - Governança';
                $desc = 'Ferramentas para ajudar o seu município a monitorar informações e tomar decisões ágeis e eficientes.';
                break;
            
            case '2':
                $titulo = 'Eixo 2 - Comunicação';
                $desc = 'Ferramentas que ajudam o seu município a preparar um plano de comunicação e monitorar a eficiência de suas divulgações locais.';
                break;
                
            case '3':
                $titulo = 'Eixo 3 - Vigilância';
                $desc = 'Ferramentas para garantir o atendimento eficiente dos cidadãos.';
                break;
            
            case '4':
                $titulo = 'Eixo 4 - Assistência';
                $desc = 'Ferramentas para apoiar os municípios no acompanhamento dos dados epidemiológicos e um repositório de capacitações em saúde.';
                break;
                
            case '5':
                $titulo = 'Eixo 5 - Impactos Fiscais';
                $desc = 'Ferramentas e Boas práticas para uso eficiente de recursos e retomada econômica.';
                break;

            default:
                $titulo = 'Indefinido';
                break;
        }
        
        if($id != ""){
            $eixos = Materiais::where("categoria_id", 2)->where("status",1)->where("eixo",$id)->get();
            return view('site.ferramentas.index',compact("eixos","titulo","desc",'eixo',
                'eixo1','eixo2','eixo3','eixo4','eixo5'));
            
            
        }else{
    
        $eixos = Materiais::where("categoria_id", 2)->where("status",1)->get();
        
        return view('site.ferramentas.index',compact("eixos","titulo","desc",'eixo',
                'eixo1','eixo2','eixo3','eixo4','eixo5'));
         }
    }
}
