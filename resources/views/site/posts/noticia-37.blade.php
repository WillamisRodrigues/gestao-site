@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre a retomada econômica pós pandemia de covid-19
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>Profissionais da Elo Group conversam com o secretário adjunto de planejamento orçamento e gestão da prefeitura de Belo Horizonte sobre medidas que podem ajudar os municípios no enfrentamento da crise econômica instaurada devido a pandemia   </i> 
        </h4>
         <p class="text-white"> 25 de agosto de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/35.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>Na última quinta-feira (20) aconteceu mais uma edição da iniciativa Webinar Saúde. Conduzido pela subdiretora da Elo Group Lays Lobato e pelo consultor da empresa Ademir Ribeiro, o momento foi focado em discutir estratégias que possam viabilizar a médio e longo prazo, do ponto de vista econômico, os enfrentamos dos municípios passada a pandemia de covid-19. O secretário adjunto de planejamento orçamento e gestão da prefeitura de Belo Horizonte, Jean Mattos Duart, também participou do seminário virtual.</p>
        <p>De acordo com Ademir Ribeiro, a pandemia gerou impactos em todos os cenários, seja no macroeconômico até o  municipal. Todos os setores públicos e privados foram impactados. "A gente precisa pensar em negócios econômicos locais para que as receitas das cidades voltem a pulsar", afirma.  </p>
        <p>echando e o desemprego, além do corte de investimentos em obras de infraestruturas e o aumento de gastos públicos na área da saúde, levaram o país para uma retração econômica. "Para a retomada, esse cenário exige estratégias como mapeamento das atividades econômicas com maiores riscos, mas que têm o maior impacto fiscal nos municípios. Olhar regionalmente e avaliar cada caso é fundamental para desenvolver protocolos e condutas reais voltados a realidade de cada cidade", finaliza. </p>
        <p>Jean Mattos lembra que ninguém foi preparado para enfrentar uma pandemia, nem do ponto de vista acadêmico nem prático, e isso chama atenção para saber como podemos administrar e sair desse cenário caótico o mais rápido possível e da melhor forma. "Aqui em Belo Horizonte fizemos fechamentos cirúrgicos, preservamos as atividades industriais, construção civil e comércio antes do pico da pandemia e isso foi fundamental para manter 82% dos CNPJS ativos na cidade, 
mas tivemos uma perda de arrecadação de R$ 1 milhão no período. Fazer parcerias com empresas privadas foram fundamentais para achar alternativas que promoveram o bem comum a todos", finaliza.</p>
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