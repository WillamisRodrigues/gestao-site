@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post noticias-logo" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Instituto Votorantim e BNDES selecionam municípios com maior vulnerabilidade para receber apoio técnico no enfrentamento da covid-19
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Iniciativa em parceria com o BNDES (Banco Nacional de Desenvolvimento Econômico e Social) selecionará até 40 municípios para receber assessoria e mentoria </i> 
        </h4>
         <p class="text-white"> 28 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/8.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
      <div class="row">
         <div class="col-md-12">
            <img src="{{asset('site/img/empresas/instituto.png')}}" alt="" class="logo-noticia-mobile">
            <img src="{{asset('site/img/empresas/18.png')}}" alt="" class="pull-right logo-noticia-mobile">
         </div>
      </div>
        <p class="mt-4">O Instituto Votorantim e o BNDES lançam hoje a 2ª edição do edital <strong> Municípios Contra o Coronavírus </strong> que selecionará até 40 municípios para receber assessoria técnica e especializada para as prefeituras, equipes da secretaria de saúde e de gestão para apoiar no enfrentamento e gerenciamento da pandemia de covid-19.
Podem participar as cidades de até 350 mil habitantes das microrregiões listadas como com maior risco e vulnerabilidade a pandemia, conforme estudo realizado Fundação Oswaldo Cruz - FIOCRUZ.  O recorte de municípios leva em conta o estudo realizado que lista as 41 microrregiões que podem ser atingidas em duas ondas de propagação do coronavírus, considerando aspectos como a localização próxima a aeroportos, a disponibilidade e distribuição de leitos hospitalares e a vulnerabilidade social e econômica.
</p>
<p>As inscrições serão recebidas até o dia <strong> 2 de junho </strong> e os municípios serão selecionados   considerando aspectos relacionados a disponibilidade de equipe técnica e gestora para participação na assessoria, estágio das medidas preventivas e de comunicação com equipes de saúde e população e articulação local, regional e federal no combate a pandemia.</p>
<p>Também serão usados como critérios de priorização para as inscrições recebidas, dados relacionados à vulnerabilidade dos municípios em relação à pandemia, de acordo com o levantamento do Índice de Vulnerabilidade Municipal (IVM), criado pelo Instituto Votorantim, que conta com informações relacionadas à porcentagem de população com mais de 60 anos, cobertura da atenção básica, Cobertura da vigilância sanitária, dependência do sistema público, Leitos de UTI e Leitos normais; quantidade de profissionais saúde, entre outros dados secundários. </p>
<p>Os municípios selecionados receberão apoio técnico remoto pelo período de até 4 meses, podendo ser prorrogado conforme necessidade, com especialistas na área técnica e de saúde.  A iniciativa atuará em conjunto com o comitê gestor do município para gerenciamento da Crise, identificando os principais impactos nas cidades em função do covid-19 para a elaboração de soluções para o enfrentamento da pandemia considerando eixos como Governança e Gestão da Crise, Comunicação, Vigilância, Assistência e Impactos Fiscais.</p>
<p>A iniciativa Municípios Contra o Coronavírus já atua em quase 90 municípios brasileiros em 18 estados, selecionados via edital e por meio de indicação de municípios de influência das empresas investidas da Votorantim, BNDES e parceiros, como o Instituto Arapyaú. </p>
<p>A iniciativa faz parte do Programa de Apoio à Gestão Pública (AGP), do Instituto Votorantim e BNDES, que ganhou a edição especial “Municípios contra o Coronavírus”, para atendimento às demandas relativas ao planejamento do enfrentamento ao covid-19.  Ao todo, a iniciativa poderá chegar a um investimento de R$ 4 milhões e atendimento de mais de 150 municípios no total.</p>
<p>As inscrições para essa 2 edição do edital são gratuitas e pode ser acessado no site <span style="word-wrap: break-word;"> www.institutovotorantim.org.br/municipioscontraocorona/ </span>.</p>
<p>Os municípios têm de hoje <strong> até o dia 2 de junho </strong> para se inscrever e os resultados serão divulgados a <strong> partir do dia 9 de junho </strong>.  Dúvidas podem ser enviadas pelo próprio site via formulário.</p>
<p>O projeto faz parte de uma série de ações da Votorantim, suas empresas investidas, BNDES e parceiros no combate à pandemia do novo coronavírus. O principal foco são municípios menores, considerando a interiorização da pandemia e a escassez de infraestrutura de saúde nessas localidades, entre outros critérios. No total, a Votorantim, em conjunto com suas as empresas investidas já realizaram iniciativas que somam R$ 150 milhões.</p>
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