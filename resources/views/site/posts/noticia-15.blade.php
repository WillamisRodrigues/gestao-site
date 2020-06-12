@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre manejo clínico e ventilatório do paciente com Covid-19 
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Profissionais da BP - A Beneficiência Portuguesa de São Paulo falam sobre as principais condutas que precisam ser adotadas para os pacientes internados em estado grave</i> 
        </h4>
         <p class="text-white"> 12 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/16.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Na última quinta-feira (11) aconteceu a décima quarta palestra da iniciativa Webinar Saúde. Conduzido pelos coordenadores da BP – A Beneficência Portuguesa de São Paulo Viviane Veiga, Fernando Ramos e Rodrigo de Almeida, o momento foi focado na importância do manejo técnico e profissional para lidar com aquelas pessoas que estão em estado de vulnerabilidade por conta da infecção do coronavírus</p>
       <p>De acordo com a coordenadora Viviane Veiga, já é sabido entre os profissionais que estão na linha de frente do combate ao coronavírus que a doença tem períodos dentro daquelas pessoas infectadas. "Cada vez mais a obesidade, refletida na pressão alta, vem associada a gravidade da infecção. Então, um paciente que já tem certas patologias, tem um quadro clínico de piora com o passar dos dias da infecção. Percebemos que existem períodos de tempestade inflamatória. Dessa forma, os exames laboratoriais, por exemplo, ajudam nos marcadores do avanço da doença. Perceber os padrões é mais do que necessário", afirma. </p>
       <p>Para o coordenador Fernando Ramos, é necessário que todos da equipe tenham um treinamento e protocolos a seguir para saber exatamente o que fazer na hora da intubação e nos momentos seguintes. "A observação intensa é necessária. Fazer bem feito o que a gente sabe é um dos caminhos para melhorar o quadro dos pacientes. Além disso, a paciência é uma postura necessária para lidar com essa doença. O covid-19 não tem remédio específico. Então, a execução de boas práticas é o que faz a diferença", finaliza.</p>
       <p>O tema do próximo webinar será <strong> Boas Práticas Durante o Isolamento </strong> e acontecerá às 18h da próxima quinta-feira (11). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão.   </p>
        <a href="{{route('play')}}" class="btn btn-material mr-4"> <i class="fa fa-play"> </i> Assista o Webinar</a>
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