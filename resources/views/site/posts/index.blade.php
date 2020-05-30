@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre a tecnologia como uma aliada  à saúde 
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> A diretora executiva de Tecnologia e Operações da BP- A Beneficiência 
          Portuguesa de São Paulo, Lilian Quintal Hoffman, compartilhou estratégias
           que as unidades de saúde podem tomar para viabilizar o seu funcionamento </i> 
        </h4>
         <p class="text-white"> 12 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/3.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>Na terça-feira (12) aconteceu a oitava palestra da iniciativa Webinar Saúde. Conduzida pela diretora executiva de Tecnologia e Operações da BP - A Beneficiência Portuguesa de São Paulo, Lilian Quintal Hoffman, e mediado pelo gerente executivo de de Tecnologia da instituição, Fabrício Amando, o momento foi focado em estratégias nos sistemas operacionais que os hospitais podem tomar para melhorar o funcionamento em meio à pandemia do Covid-19. </p>
          <p>De acordo com Hoffman, é fundamental que cada unidade de saúde pontue todos os aspectos que corroboram para surgir uma estratégia digital que as ajudam. “Hoje em dia, 69% das unidades básicas de saúde possuem sistema eletrônico para registro das informações dos pacientes. Mas esse acesso ainda engatinha, visto que o prontuário eletrônico, por exemplo, quase não existe de forma digital entre as unidades. É necessário fazer com que os profissionais de saúde se familiarizem ainda mais com as ferramentas digitais para fazer com que o fluxo de trabalho se intensifique”, lembra.</p>
          <p>A diretora lembra que o Ministério da Saúde se atentou para essa realidade e lançou no estado de Alagoas o projeto piloto do Conecte Sus, que é um sistema que permite que todas as informações do paciente sejam compactadas dentro do sistema para facilitar o atendimento em qualquer unidade de saúde que a pessoa for. “Se trata de um incentivo para a informatização da saúde. Mas é necessário, além de uma plataforma, capacitar todos os funcionários e viabilizar o acesso a computadores e a internet na totalidade das unidades de saúde básica. Ainda vai levar algum tempo para esse projeto de tornar unânime no Brasil”, afirma.</p>
          <p>O mediador da palestra, Fabrício Amando, lembrou que o fomento a inovação é uma iniciativa chave para a tecnologia se tornar realidade em todos os ambientes hospitalares. “Inteligência artificial, processos autônomos robotizados e integração de dispositivos são algumas estratégias digitais que podem melhorar ainda mais o atendimento às pessoas", finaliza.</p>
          <p>O tema do próximo webinar será “Testes  Disponíveis para Diagnóstico de Covid-19: Indicações e Interpretação e acontecerá às 18h da próxima quinta-feira (14). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão.</p>
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