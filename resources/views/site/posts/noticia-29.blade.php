@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Instituto Votorantim e BP - A Beneficiência Portuguesa de São Paulo desenvolvem pesquisa de medicamento para auxiliar os sintomas da infecção por Covid-19
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 06 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/29.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Entidades analisam os efeitos da droga Tocilizumabe para os pacientes infectados com o novo coronavírus. Resultados só devem estar prontos em agosto</p>
       <p>A parceria entre o Instituto Votorantim e BP - A Beneficência Portuguesa de São Paulo iniciou uma pesquisa em relação aos efeitos do medicamento Tocilizumabe no combate à covid-19.  A pesquisa reúne 150 pacientes de 12 hospitais e avalia como a droga, que bloqueia atividades inflamatórias, pode diminuir as lesões em diferentes órgãos causadas pelo novo coronavírus. Os resultados devem estar prontos em agosto.</p>
         <p> O assunto foi destaque no Valor Econômico hoje. Confira: <a href="https://valor.globo.com/empresas/noticia/2020/07/06/recursos-ajudam-a-acelerar-busca-de-tratamentos.ghtml" style="word-wrap: break-word;" target="_blank">https://valor.globo.com/empresas/noticia/2020/07/06/recursos-ajudam-a-acelerar-busca-de-tratamentos.ghtml<a></p>
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