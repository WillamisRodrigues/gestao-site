@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre os aspectos clínicos e laboratoriais do Covid-19
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>O médico infectologista Celso Granato detalhou sobre a carga viral e as medidas clínicas existentes hoje para combater o Covid-19 </i> 
        </h4>
         <p class="text-white"> 14 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/2.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>Na última quinta-feira (14) aconteceu a nona palestra da iniciativa Webinar Saúde. Conduzido pelo diretor Clínico do Grupo Fleury e médico infectologista, Celso Granato, e mediado pela gerente-executiva Médica de Medicina Diagnóstica da BP – A Beneficência Portuguesa de São Paulo, Roberta Paulikevis, o momento foi focado nos aspectos taxonômicos, clínicos e laboratoriais do Covid-19.  </p>
           <p>De acordo com o infectologista, é fundamental que os profissionais de saúde entendam a possível origem do vírus e as fases da patologia que ele provoca dentro do corpo do ser humano. “Entender todos os processos do vírus pode ajudar a entender como agir para impedir a sua propagação. Foi assim que foram criados os três testes rápidos existentes hoje em dia, os quais carregam vantagens e desvantagens. Além disso, é necessário que os profissionais saibam, detalhadamente, os riscos que correm os pacientes que já tem outras doenças previamente diagnosticadas, como diabetes ou pneumonia”, afirma.</p> 
           <p>O infectologista ainda lembra que a necessidade de exames diários nos pacientes diagnosticados é latente. "É preciso se atentar a carga viral nas excreções para avaliar a evolução da positividade do vírus. Cada pessoa precisa ter um quadro clínico de acompanhamento intenso. Enquanto a vacina para o vírus não for aprovada e comercializada, todos precisam ser extremamente avaliados", lembra</p>
           <p>Indagado pela gerente-executiva Médica de Medicina Diagnóstica da BP – A Beneficência Portuguesa de São Paulo, Roberta Paulikevis, sobre a comercialização dos testes rápidos, o infectologista afirmou que a interpretação dos resultados precisam ser tomadas com responsabilidade e conhecimentos, o que exige a necessidade de um médico. "Além disso, é importante sempre repetir os testes para atestar a veracidade e procurar as medidas cabíveis", finalizou.</p>
           <p>Indagado pela gerente-executiva Médica de Medicina Diagnóstica da BP – A Beneficência Portuguesa de São Paulo, Roberta Paulikevis, sobre a comercialização dos testes rápidos, o infectologista afirmou que a interpretação dos resultados precisam ser tomadas com responsabilidade e conhecimentos, o que exige a necessidade de um médico. "Além disso, é importante sempre repetir os testes para atestar a veracidade e procurar as medidas cabíveis", finalizou.</p> 
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