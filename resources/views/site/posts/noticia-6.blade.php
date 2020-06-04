@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post sem-espaco" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Cidades mais vulneráveis ao coronavírus têm sistema de saúde despreparado
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Índice criado pelo Instituto Votorantim listou risco de cidades colapsarem caso haja explosão de contágio pelo vírus </i> 
        </h4>
         <p class="text-white"> 31 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/7.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p> <a href="http://institutovotorantim.org.br/municipioscontraocorona/ivm/" target="_blank"> <strong> O Índice de Vulnerabilidade Municipal (IVM), desenvolvido pelo Instituto Votorantim </a> em parceria com a 
          Gove, é um instrumento inédito de apoio ao combate à Covid-19 no Brasil. 
          A ferramenta classifica todas as cidades brasileiras em relação ao grau de vulnerabilidade para o enfrentamento da pandemia considerando dados públicos como proporção de população idosa, 
          número de leitos hospitalares e de UTI, quantidade de respiradores por 
          100 mil habitantes e PIB per capita.
  </p>
  <p>O levantamento foi destaque na <a href="https://www1.folha.uol.com.br/cotidiano/2020/05/cidades-mais-vulneraveis-ao-coronavirus-tem-sistema-de-saude-despreparado.shtml" target="_blank"><strong> Folha de S.Paulo <strong></a>  
  e no <a href="https://politica.estadao.com.br/blogs/gestao-politica-e-sociedade/a-expansao-da-covid-19-pelo-brasil-rural-e-interiorano-e-seus-desafios/" target="_blank"><strong> ESTADÃO. </strong></a> </p>
        <p> Veja a reportagem da Folha de São Paulo:  <a href="https://www1.folha.uol.com.br/cotidiano/2020/05/cidades-mais-vulneraveis-ao-coronavirus-tem-sistema-de-saude-despreparado.shtml" style="word-wrap: break-word;" target="_blank">https://www1.folha.uol.com.br/cotidiano/2020/05/cidades-mais-vulneraveis-ao-coronavirus-tem-sistema-de-saude-despreparado.shtml <a></p>
        <p> Veja a reportagem do Estadão:  <a href="https://politica.estadao.com.br/blogs/gestao-politica-e-sociedade/a-expansao-da-covid-19-pelo-brasil-rural-e-interiorano-e-seus-desafios/" style="word-wrap: break-word;" target="_blank">https://politica.estadao.com.br/blogs/gestao-politica-e-sociedade/a-expansao-da-covid-19-pelo-brasil-rural-e-interiorano-e-seus-desafios/ <a></p>
        <p>Acesse e conheça mais sobre essa importante ferramenta de apoio aos municípios no enfrentamento a covid-19. </p>
        <a href="http://institutovotorantim.org.br/municipioscontraocorona/ivm" class="btn btn-link2-ivm mr-4" target="_blank"> <i class="fa fa-map-marker"> </i> ACESSE O IVM DO SEU MUNICÍPIO</a>  
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