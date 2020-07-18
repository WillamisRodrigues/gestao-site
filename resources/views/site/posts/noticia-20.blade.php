@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Farol Covid - Entenda e controle a Covid-19 em seu estado
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Desenvolvido pela equipe do Coronacidades, o farol veio para auxiliar no controle da covid-19 nos estados brasileiros, por meio do monitoramento dos casos e análises dos dados </i> 
        </h4>
         <p class="text-white"> 22 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/21.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O Farol Covid veio para contribuir no enfrentamento da covid-19, desenvolvimento pela equipe do CoronaCidades, uma iniciativa da Impulso, do Instituto Arapyau e do Instituto de Estudos de Políticas de Saúde (IEPS). O objetivo é promover um monitoramento dos casos registrados em cada município e apresentando análises que possibilitam uma visão da situação dos estados brasileiros com relação a contaminação dos habitantes, a partir dos dados oficialmente publicados pelo governo.</p>
       <p>"Ouvimos de prefeitos e prefeitas em todo o país: meu município pode abrir? Ou, ao contrário, deveria fechar-se para evitar o pior? Nós criamos o Farol Covid para responder essa demanda. Desde então, ouvimos de prefeitos e secretários de saúde que a ferramenta é utilizada diariamente, como instrumento de gestão que combina interface simples e sofisticação do modelo por trás. Isso é o que buscamos no Coronacidades.org: dar ao gestor público instrumentos para tomar decisões, neste momento que é o mais desafiador de suas vidas profissionais", conta João Abreu, Diretor e Cofundador da Impulso, sobre como se deu a criação da ferramenta e o retorno por parte dos municípios que têm consultado as análises oferecidas.</p>
       <p>Dentre as análises apresentadas, o Farol Covid informa:

<ul>
<li> - Ritmo de Contágio (cada contaminado infecta em média quantas pessoas)</li>
<li> - Subnotificação (a cada 10 pessoas doentes, quantas são diagnosticadas com covid-19)</li>
<li> - Capacidade hospitalar (previsão de em quanto tempo todos os leitos do estado estarão ocupados)</li>
<li> - Isolamento social (percentual de pessoas que ficaram em casa na última semana)</li>
</ul>
</p>
<p> <strong> Sobre o CoronaCidades </strong> </p>

<p> CoronaCidades é uma plataforma feita para gestores públicos, que reúne ferramentas e informações chave para superar a COVID-19. </p>
<p>Além dos recursos online, um time multidisciplinar está a postos para apoiar municípios e estados parceiros no planejamento e implementação de ações específicas nas áreas de saúde, assistência social, planejamento e economia.</p>
       <p>
       A partir do cruzamento de todos esses dados a ferramenta informa o risco de colapso do sistema de saúde que atende aquele município. Para saber a situação de seu estado, acesse:  <a href="https://farolcovid.coronacidades.org/" style="word-wrap: break-word;" target="_blank">https://farolcovid.coronacidades.org/ <a></p>
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