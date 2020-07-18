@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Município de Pintadas, na Bahia, é selecionado no programa de Apoio à Gestão Pública do Instituto Votorantim
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Cidade contará com as ferramentas do programa que consiste em mentoria e assessoria para combate ao covid-19 através de telemedicina e webinário </i> 
        </h4>
         <p class="text-white"> 27 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/26.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O município de Pintadas, localizado no interior da Bahia, é mais uma cidade que agora conta com o apoio nacional do Instituto Votorantim. Serão até 4 meses de assessoria técnica e especializada para prefeituras e equipes de saúde, visando o gerenciamento do combate à pandemia. Na prática, o apoio acontecerá através de atendimentos virtuais com foco em temas como governança de crise, comunicação e distanciamento, assistência, vigilância e impactos fiscais. </p>
       <p>Confira mais detalhes acessando:  <a href="https://www.calilanoticias.com/2020/06/comite-popular-de-pintadas-conquista-apoio-nacional-para-combate-a-covid-19" style="word-wrap: break-word;" target="_blank">https://www.calilanoticias.com/2020/06/comite-popular-de-pintadas-conquista-apoio-nacional-para-combate-a-covid-19  <a></p>
       </div>
      <div style="height:100px;"></div>
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