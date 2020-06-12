@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        43 cidades receberão apoio do BNDES e Instituto Votorantim contra covid-19
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>Municípios do Norte, Nordeste, Centro-Oeste e Sudeste contarão com assessoria técnica sobre como combater a doença e como gerenciar os seus efeitos</i> 
        </h4>
         <p class="text-white"> 10 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/15.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>Cidades do Norte, Nordeste, Centro-Oeste e Sudeste do país foram escolhidas para receber assessoria técnica sobre como combater o novo coronavírus e como gerenciar os efeitos da pandemia. A iniciativa do Instituto Votorantim em parceria com o Banco Nacional de Desenvolvimento Econômico e Social (BNDES) elegeu 43 municípios com até 350.000 habitantes do Amazonas, Bahia, Ceará, Mato Grosso, Minas Gerais, Pará, Paraíba, Pernambuco, Piauí, Rio de Janeiro, Rondônia, São Paulo e Sergipe</p>
          <p>O recorte de municípios leva em consideração um estudo realizado pela Fundação Oswaldo Cruz que lista as 41 microrregiões que podem ser atingidas por duas ondas de propagação da covid-19, considerando aspectos como localização próxima a aeroportos, disponibilidade de leitos e vulnerabilidade socioeconômica.</p>
          <p>As cidades selecionadas receberão apoio técnico remoto por quatro meses, período que pode ser prorrogado conforme a necessidade. A ideia é que especialistas de gestão e de saúde trabalhem em conjunto com o comitê gestor do município no gerenciamento da crise, na identificação dos principais impactos e na elaboração de soluções.</p>
          <p>A doação foi destaque no portal Exame. Confira:   <a href="https://exame.com/brasil/43-cidades-receberao-apoio-do-bndes-e-instituto-votorantim-contra-covid-19/" style="word-wrap: break-word;" target="_blank">https://exame.com/brasil/43-cidades-receberao-apoio-do-bndes-e-instituto-votorantim-contra-covid-19/ <a></p>
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