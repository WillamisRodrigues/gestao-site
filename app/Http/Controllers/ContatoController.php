<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contato;
use Redirect;

class ContatoController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'nome'     =>  'required',
            'telefone'  =>  'required',
            'email'  =>  'required',
            'municipio'  =>  'required',
            'mensagem' =>  'required'
           ]);
      
              $data = array(
                  'nome' =>  $request->nome,
                  'telefone' =>  $request->telefone,
                  'email'   =>  $request->email,
                  'municipio'   =>  $request->municipio,
                  'mensagem' =>   $request->mensagem
              );
      
        Mail::to('c')
        ->cc('antonio.rodrigues@engajacomunicacao.com.br')
        ->cc('contato@institutovotorantim.org.br')
        ->send(new Contato($data));
        return back()->with('success', 'Email enviado com sucesso !');
      
    }
}
