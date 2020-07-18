@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        BP e Salesforce colaboram em projeto para levar conhecimento sobre covid-19 à população brasileira
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 16 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/19.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O Programa de Apoio à Gestão Pública, do Instituto Votorantim, tem levado know how em gestão de crises epidemiológicas até gestores de saúde de municípios no interior do Norte e do Nordeste do País. Por meio de videoconferências semanais com executivos da Beneficência Portuguesa de São Paulo, um dos maiores polos de saúde privados do País, os gestores das localidades atendidas pelo projeto são capacitados para atuar localmente. </p>
         <p> O assunto foi destaque no portal TI Inside. Confira: <a href="https://tiinside.com.br/16/06/2020/bp-e-salesforce-colaboram-em-projeto-para-levar-conhecimento-sobre-covid-19-a-populacao-brasileira/" style="word-wrap: break-word;" target="_blank">https://tiinside.com.br/16/06/2020/bp-e-salesforce-colaboram-em-projeto-para-levar-conhecimento-sobre-covid-19-a-populacao-brasileira/ <a></p>
        </div>
      <div style="height:30px;"></div>
      <h2 class="section-intro__title titulo-lista-noticias">Mais Notícias: </h2>
    <div class="divisao-6"></div>
      <div style="height:30px;"></div>
      <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                        @foreach($noticias as $noticia)
                           <!-- column -->
                           <div class="col-lg-4 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                <img width="100%" src="{{asset('site/img/noticias/'.$noticia->miniatura)}}" alt="">
                                    <div class="card-body">
                                    <h6 class="card-title data-da-noticia"><i class="fa fa-clock"></i> {{ date('d/m/Y', strtotime($noticia->created_at)) }}</h6>
                                        <h4 class="card-title titulo-item-noticia"> <strong>{{$noticia->titulo}}</strong> </h4>
                                        <p class="card-text desc-noticia">
                                            {{$noticia->descricao}}
                                        </p>
                                        <a href="{{$noticia->destino}}" class="btn btn-leia-mais"> > Leia Mais </a>
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
  </section>
  @include('site.contato')
</main>  
  @endsection