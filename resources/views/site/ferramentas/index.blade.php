@extends('layouts.site.app-site')
@section('titulo','Materiais Download')
@section('conteudo')
  @include('layouts.site.header-noticias')
  
  <main class="side-main"> 
    <section style="margin:100px 0px;" id="todasnoticias">
        <div class="container">
        <h2 class="section-intro__title titulo-materiais-apoio">FERRAMENTAS E CONTEÚDOS </h2>
        <div class="divisao-6"></div>
        <p class="mt-3">Espaço criado para você acessar e baixar todos os materiais 
        técnicos e de divulgação da iniciativa Municípios Contra o Coronavírus.</p>
        @include('site.materiais.menu.principal')
               <div style="height:100px;" class="mobile-espaco-2"></div>
               <div class="row">
                 
                   <div class="col-md-3">
                   <ul class="list-group sticky-top mb-4 mobile-espaco" style="z-index:0!important; padding-top:110px;">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                       <a href="{{route('ferramentas')}}"> Todos </a>
                        <span class="badge badge-primary badge-pill">{{$eixo}}</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                       <a href="{{route('ferramentas',['id' => 1])}}"> Eixo 1 - Governança </a>
                        <span class="badge badge-primary badge-pill">{{$eixo1}}</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                      <a href="{{route('ferramentas',['id' => 2])}}">Eixo 2 - Comunicação </a>
                        <span class="badge badge-primary badge-pill">{{$eixo2}}</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                      <a href="{{route('ferramentas',['id' => 3])}}">Eixo 3 - Vigilância  </a>
                        <span class="badge badge-primary badge-pill">{{$eixo3}}</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                      <a href="{{route('ferramentas',['id' => 4])}}">Eixo 4 - Assistência </a>
                        <span class="badge badge-primary badge-pill">{{$eixo4}}</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                      <a href="{{route('ferramentas',['id' => 5])}}">Eixo 5 - Impactos Fiscais </a>
                        <span class="badge badge-primary badge-pill">{{$eixo5}}</span>
                      </li>
                    </ul>
                   </div>
                    <div class="col-md-9">
                    @if(sizeof($eixos) > 0)
                      <h2>{{$titulo}}</h2>
                      <hr>
                      <p> {{$desc}} </p>
                        <!-- Row -->
                        <div class="row">
                        @foreach($eixos as $eixo)
                           <!-- column -->
                           <div class="col-lg-4 col-md-6 img-fluid">
                           
                <div style="height:30px;"></div>
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/'.$eixo->imagem)}}" alt="Card image cap">
                                    <div class="card-body" style="min-height: 400px!important;">
                                    <h4 class="card-title titulo-item-noticia"> <strong> {{$eixo->titulo}} </strong> </h4>
                                        <p class="card-text desc-material-down">{{$eixo->descricao}} </p>
                                        @if($eixo->tipo == 1)
                                        <a  href="@if($eixo->download != '#') {{asset('site/img/materiais/ferramentas/'.$eixo->download)}} @else # @endif" target="@if($eixo->download != '#')_blank @endif" class="btn btn-leia-mais"> > 
                                          @if($eixo->download == "#") Em Breve @else Download  @endif 
                                        </a>
                                        @else 
                                        <a href="{{$eixo->download}}" target="_blank" class="btn btn-leia-mais"> > 
                                          Acesse  
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        @endforeach
                          
                        </div>
                    @endif
                        
                    </div>
                </div>
        </div>
   </section>
   @include('site.contato')
</main>  
  @endsection