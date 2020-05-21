@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post sem-espaco" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Sorocaba recebe 100 mil EPIs para unidades de saúde
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 15 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/noticias/3.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>O quadro Solidariedade S/A, do telejornal Tem Notícias 2ª Edição, 
              veiculado em toda a região de Sorocaba, mostrou a entrega de 100 mil 
              EPIs para unidades de saúde do município. Entre os equipamentos estão:
               toucas, álcool em gel, máscaras, luvas e aventais. 
               A iniciativa faz parte do projeto Municípios Contra o Corona, do Instituto Votorantim, com o apoio das empresas investidas da Votorantim S/A.  </p>
              <p> Veja a reportagem:  <a href="https://globoplay.globo.com/v/8554459/programa/" style="word-wrap: break-word;" target="_blank">https://globoplay.globo.com/v/8554459/programa/ <a></p>
      </div>
      <img src="{{asset('site/img/post/4.jpg')}}" alt="" width="50%" class="mt-4 imagem-post-vt">
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