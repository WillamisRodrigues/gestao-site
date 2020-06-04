@extends('layouts.site.app-site')
@section('titulo','Materiais Download')
@section('conteudo')
  @include('layouts.site.header-noticias')
  
  <main class="side-main"> 
    <section style="margin:100px 0px;" id="todasnoticias">
        <div class="container">
        <h2 class="section-intro__title titulo-materiais-apoio">FERRAMENTAS E CONTEÚDOS </h2>
        <div class="divisao-6"></div>
        @include('site.materiais.menu.principal')
               <div style="height:100px;"></div>
               <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                        @foreach($materiais as $material)
                           <!-- column -->
                           <div class="col-lg-3 col-md-6 img-fluid">
                           
                <div style="height:30px;"></div>
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/'.$material->imagem)}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> {{$material->titulo}} </strong> </h4>
                                        <p class="card-text desc-material-down">{{$material->descricao}} </p>
                                        <a href="{{asset('site/img/materiais/'.$material->download)}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        @endforeach
                            
                        </div>
                        <!-- Row -->
                    </div>
                </div>
        </div>
   </section>
   @include('site.contato')
</main>  
  @endsection