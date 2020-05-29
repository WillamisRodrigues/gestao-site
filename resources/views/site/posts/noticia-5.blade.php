@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre a adequação dos espaços físicos e importância dos controles de acesso durante a pandemia 
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Profissionais da BP - A Beneficiência Portuguesa de São Paulo falam sobre a necessidade de limitar a circulação de pessoas nos ambientes hospitalares e a relevância de avaliar os ambientes para um isolamento social sadio </i> 
        </h4>
         <p class="text-white"> 29 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/6.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>Na última quinta-feira (28) aconteceu a décima segunda palestra da iniciativa Webinar Saúde. Conduzido pelas gerente executivas da BP – A Beneficência Portuguesa de São Paulo Mônica Morgese e Cíntia Pinheiro e pelo coordenador corporativo de segurança Clayton Luiz Barbosa, o momento foi focado na relevância da segurança dos domicílios e unidades de saúde.</p>
        <p>De acordo com Cintia Pinheiro, é importante lembrar que a estrutura física dos ambientes hospitalares e domiciliares tem uma ligação direta com as dinâmicas de segurança das pessoas que frequentam esses espaços. "A gente tem que avaliar que proporcionar locais adequados ao isolamento está relacionado com várias questões como ventilação natural, afastamento adequado dos móveis ou leitos, higienização contínua e controle de fluxo dessa população. A conscientização de todos os cidadãos em relação a importância da higiene é a chave para vencermos essa guerra", afirma. </p>
       <p>Para o coordenador Clayton Luiz Barbosa, o isolamento social requer uma atenção maior para a segurança dos domicílios e das unidades de saúde. "Para garantir que as pessoas ficarão bem, também é necessário analisar o controle de acesso das pessoas naqueles locais. Uma forma de minimizar os danos é restringir a permissão de circulação de pessoas em todos os locais de uma casa, prédio ou hospital. Ou seja, fazer com que cada um frequente apenas os ambientes que realmente precisa", finaliza. </p>
       <p>O tema do próximo webinar será <span class="destaque"> Manejo clínico e ventilatório do paciente com covid-19 </span> e acontecerá às 18h da próxima quinta-feira (4). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão.   </p>
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