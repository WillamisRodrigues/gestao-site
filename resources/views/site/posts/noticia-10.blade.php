@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Cinco dos dez municípios mais vulneráveis à Covid-19 no Brasil são baianos, diz estudo
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Wanderley, 2º município mais vulnerável à Covid-19 no país. </i> 
        </h4>
         <p class="text-white"> 29 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/11.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>A Bahia tem cinco dos 10 municípios mais vulneráveis à Covid-19 no Brasil, segundo estudo do Instituto Votorantim. Wanderley, Ibirataia, Sítio do Quinto, Jussiape e Ubaitaba integram o “top 10” da lista que avalia 5.570 cidades brasileiras.</p>
          <p>O estudo utilizou como critérios para a avaliação questões socioeconômicas, tamanho da população idosa, taxa de urbanização, estrutura e organização do sistema de saúde, capacidade fiscal da administração municipal, entre outros.</p>
          <p>Wanderley, localizado na Bacia do Rio Grande, é o município brasileiro com o segundo maior índice de vulnerabilidade. A estrutura do sistema de saúde na região pesou para o desempenho ruim da cidade no ranking. Segundo o Instituto Votorantim, a microrregião do Cotegipe não possui leitos de UTI para o tratamento da Covid-19.</p>
          <p>Ibirataia, no território de identidade do Médio Rio de Contas, é o segundo município baiano com pior desempenho no estudo. A autonomia fiscal da administração foi o fator que mais pesou para o resultado. Além disso, apenas 11,62% da população local encontra-se empregada.</p>
          <p>Sítio do Quinto, localizado nas proximidades de Jeremoabo, enfrenta dois graves problemas que aumentam sua vulnerabilidade diante da Covid-19: a falta de leitos de UTI na região e a grande percentagem de população desempregada. Segundo o estudo, apenas 8,47% da população possui uma ocupação.</p>
          <p>Em Jussiape, na Chapada Diamantina, além de haver uma pequena parcela da população ocupada, o rendimento médio dos trabalhadores não ultrapassa 1,4 salário mínimo. O estudo deixa claro que a questão de renda é um fator fundamental para a vulnerabilidade diante da pandemia.</p>
          <p>Por fim, Ubaitaba, no território de identidade do Litoral Sul, enfrenta tanto a questão do desemprego quanto uma gestão fiscal desequilibrada. O Instituto Votorantim deu “nota zero” à autonomia fiscal do município, o que contribuiu para o desempenho ruim no ranking.</p>
          <p>Para o Instituto Votorantim, os cinco municípios baianos menos vulneráveis para o enfrentamento da Covid-19 são, na ordem, Dias D’Ávila, Candeias, São Francisco do Conde, Camaçari e São Desidério.</p>
          <p>O assunto foi destaque no portal Bahia Notícias. Confira:   <a href="https://www.bahianoticias.com.br/municipios/noticia/21054-cinco-dos-dez-municipios-mais-vulneraveis-a-covid-19-no-brasil-sao-baianos-diz-estudo.html" style="word-wrap: break-word;" target="_blank">https://www.bahianoticias.com.br/municipios/noticia/21054-cinco-dos-dez-municipios-mais-vulneraveis-a-covid-19-no-brasil-sao-baianos-diz-estudo.html <a></p>
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