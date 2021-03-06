@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Prefeitura repassa primeira remessa de EPIs a hospitais em Muriaé
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>Os mais de 420 mil itens foram doados pelo Instituto Votorantim, através da CBA.</i> 
        </h4>
         <p class="text-white"> 05 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/18.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>A Prefeitura de Muriaé (MG) fez o repasse da primeira remessa de equipamentos de proteção individual (EPIs) a hospitais da cidade. Os mais de 420 mil itens, entre máscaras cirúrgicas e N 95, aventais impermeáveis e de TNT, álcool em gel, luvas e toucas, foram doados pelo Instituto Votorantim, por meio da CBA. As entregas foram feitas ao Hospital São Paulo, Casa de Saúde Santa Lúcia e Prontocor. </p>
          <p> O assunto foi destaque no portal G1 Zona da Mata. Confira a matéria:    <a href="https://g1.globo.com/mg/zona-da-mata/noticia/2020/06/05/prefeitura-repassa-primeira-remessa-de-epis-a-hospitais-em-muriae.ghtml" style="word-wrap: break-word;" target="_blank">https://g1.globo.com/mg/zona-da-mata/noticia/2020/06/05/prefeitura-repassa-primeira-remessa-de-epis-a-hospitais-em-muriae.ghtml <a></p>
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