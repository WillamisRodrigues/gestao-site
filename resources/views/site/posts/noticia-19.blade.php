@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre boas práticas de isolamento
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Profissionais do BID discutem soluções criativas para a conscientização das pessoas a respeito da necessidade de isolamento</i> 
        </h4>
         <p class="text-white"> 18 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/20.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O Instituto Votorantim realizou, na última quinta-feira (18), a décima quinta palestra da iniciativa Webinar Saúde. O bate-papo virtual foi conduzido pela economista do Comportamento no BID (Banco Interamericano de Desenvolvimento), Ana Maria Rojas; e a Médica Sanitarista e Especialista em Saúde, Catherine Moura. O encontro contou, ainda, com a participação da Secretária de Saúde de Batayporã (MS), Marcela Leite Macêdo.
</p>
<p>A escolha do tema se deu a partir dos relatos dos municípios participantes do projeto, que apontam inúmeros desafios para estimular a adesão das pessoas ao isolamento domiciliar.
</p>
<p>A Secretária Marcela Leite destacou em sua fala como o Coronavírus transformou a vida da população do município. "Adotamos medidas emergenciais para conter o contágio e combater a propagação do vírus. O grande desafio foi a mudança de comportamento na rotina da população, mas o esforço valeu a pena, pois conseguimos barrar o contágio em Batayporã por mais de 60 dias, trazendo tranquilidade para todos", afirmou.</p>
<p>A economista do BID, Ana Maria Rojas, abordou a economia do comportamento e como as políticas públicas devem considerar a forma como as pessoas se comportam e tomam decisões, para que sejam verdadeiramente bem-sucedidas. "Todos nós temos uma capacidade de racionalização limitada. Temos dificuldade em cumprir metas. A economia do comportamento integra conclusões da economia e da psicologia para aumentar a nossa compreensão das decisões econômicas", indicou.</p>
<p>De acordo com a médica sanitarista, Dra. Catherine Moura, os desafios impostos pelo atual momento exigem uma responsabilidade ainda maior dos gestores públicos. "Os gestores públicos são referência na propagação ou na prevenção da doença. O maior desafio é conseguir manter uma comunicação focada na promoção à saúde, no engajamento da comunidade para que todos tenham a consciência de que é um problema coletivo que requer a colaboração e articulação de toda a população", reforçou.</p>
<p>O próximo Webinar vai acontecer no dia 25 de junho, a partir das 18h, com o tema "Abordagem de gestantes com suspeita ou confirmação de Covid-19". Para participar, acesse as redes sociais do Instituto Votorantim e solicite o link da plataforma para a palestra em questão.</p>
        <a href="{{route('playgestao')}}" class="btn btn-material mr-4"> <i class="fa fa-play"> </i> Assista o Webinar</a>
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