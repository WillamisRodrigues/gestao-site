@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre o papel da liderança em tempos de crise 
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>CEO da BP - A Beneficiência Portuguesa de São Paulo fala sobre os desafios das gestões hospitalares para enfrentar a pandemia causada pelo novo coronavírus </i> 
        </h4>
         <p class="text-white"> 13 de agosto de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/34.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>Na última quinta-feira (13) aconteceu mais uma edição da iniciativa Webinar Saúde. Conduzido pela CEO da BP – A Beneficência Portuguesa de São Paulo Denise Santos e pela gerente executiva médica corporativa da instituição Cristina Balestrin, o momento foi focado em discutir as tomadas de decisões que são necessárias para gerir da melhor forma as unidades de saúde.</p>
        <p>De acordo com Denise Santos, avaliar que as decisões do presente impactam diretamente o futuro é uma forma de viver em estado de alerta e tornar as crises que surgirão melhor administradas. "Nós nos reunimos diariamente para analisar todos os aspectos operacionais e financeiros dos hospitais da instituição. Tomamos decisões que visam avaliar desde o pior cenário que pode surgir até o mais óbvio. Essa é uma forma de saber lidar com as diversas situações que acontecem constantemente e pedem agilidade", afirma. </p>
        <p>De acordo com Cristina Balestrin, além de estar preparado para tudo, entender o que o outro precisa e ter a disposição e a disponibilidade para atendê-lo é uma atitude fundamental. "Aqui nós sempre prezamos pelo companheirismo da equipe. A comunicação é prioridade. Até porque, sem os diálogos, as tomadas de decisões podem não contemplar todos os aspectos dentro daquele determinado objetivo. É necessário ter humildade para escutar todos e aprender com os erros assim como com os acertos", finaliza. </p>
        <p>O tema do próximo webinar será Retomada econômica: como os municípios podem se adaptar ao novo cenário macroeconômico pós covid-19 e acontecerá às 18h da próxima quinta-feira (20). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão.</p>
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