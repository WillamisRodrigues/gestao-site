@extends('layouts.site.app-site')
@section('titulo','Municípios contra o Coronavírus')
@section('conteudo')
@include('layouts.site.header-noticias')
<main class="side-main"> 
<section class="container">
   <div class="row">
       <div class="col-md-12">
       <div class="container">
                <h2 class="section-intro__title titulo-mapa" style="margin-top:200px;">
                MUNICÍPIOS CONTRA O CORONAVÍRUS </h2>
        <div class="divisao-6"></div>
        <p class="desc-mapa-destaque mt-4"> Presença Nacional</p>
        <p class="desc-mapa"> Confira os Municípios Selecionados:</p>
                </div>
       </div>
       <div class="col-md-6">
         <div id="mapa"> 
            <section id="au">	
            <p class="desc-mapa"> Selecione sua Região:</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="r" class="custom-control-input" id="norte">
                    <label class="custom-control-label" for="norte">Região Norte</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="r" class="custom-control-input" id="nordeste">
                    <label class="custom-control-label" for="nordeste">Região Nordeste</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="r" class="custom-control-input" id="sudeste">
                    <label class="custom-control-label" for="sudeste">Região Sudeste</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="r" class="custom-control-input" id="centro">
                    <label class="custom-control-label" for="centro">Região Centro Oeste</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="r" class="custom-control-input" id="sul">
                    <label class="custom-control-label" for="sul">Região Sul</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="r" class="custom-control-input" id="brasil">
                    <label class="custom-control-label" for="brasil">Brasil</label>
                </div>
	        </section>
            <section>
                <p class="mt-4"> <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></i> Para interagir com o mapa passe o mouse ou click os estados.</p>
                <embed id="E" src="{{asset('svg/mapa.svg')}}" type="image/svg+xml">  
                <p id="nome_estado"></p>
                <p id="capital_estado"></p>
            </section>
        </div>
</div>
       <div class="col-md-6">
            <div id="tudo">
                <div id="texto"> <!-- coluna direita -->
                    <div id="carregando">
	                    <img  src="{{asset('svg/loading.svg')}}" alt="Carregando..." />  
                    </div>
                    <div id="conteudoAjax"></div>
                </div>
            </div>
        </div>
</section>


  </div>
</div>
@include('site.contato')
</main>
@endsection