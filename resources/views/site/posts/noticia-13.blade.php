@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Prefeitura de Muriaé recebe da Votorantim, cerca de 430 mil equipamentos de proteção individual
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>As doações serão destinadas aos hospitais da cidade e para profissionais da Sec. Municipal de Saúde</i> 
        </h4>
         <p class="text-white"> 02 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/14.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>Em reforço conjunto com a Prefeitura de Muriaé  no combate ao coronavírus, o Instituto Votorantim doou para a cidade milhares de equipamentos de proteção individual. Os EPI’s chegaram no município na última sexta-feira (30) e serão distribuídos para hospitais e profissionais da própria Secretaria Municipal de Saúde (SMS) para atendimento aos pacientes nos postos.</p>
          <p>Ao todo, são 429.430 unidades, que compreendem máscaras cirúrgicas, aventais impermeáveis e de TNT, álcool em gel, luvas e toucas.</p>
          <p>Em nota, a Prefeitura de Muriaé por meio da Secretaria Municipal de Saúde agradeceu ao Instituto Votorantim pela doação e disse que os EPI´s ajudarão os profissionais da saúde a combater a disseminação do novo coronavírus.</p>
          <p>A doação foi destaque no portal da Rádio Muriaé. Confira:   <a href="http://www.radiomuriae.com.br/noticias/prefeitura-de-muriae-recebe-da-votorantim-cerca-de-430-mil-equipamentos-de-protecao-individual" style="word-wrap: break-word;" target="_blank">http://www.radiomuriae.com.br/noticias/prefeitura-de-muriae-recebe-da-votorantim-cerca-de-430-mil-equipamentos-de-protecao-individual <a></p>
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