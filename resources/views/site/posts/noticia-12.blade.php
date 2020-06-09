@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Instituto Votorantim doa kits à profissionais de saúde de Cantagalo
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i>O município de Cantagalo recebeu na última sexta-feira, 28/05, kits de Equipamento de Proteção Individual (EPI), composto por máscaras N95, máscaras descartáveis, luvas, aventais, álcool em gel, com o objetivo de apoiar o trabalho dos profissionais de saúde na prevenção e combate ao coronavírus.</i> 
        </h4>
         <p class="text-white"> 31 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/13.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>Os recursos para a aquisição dos insumos vieram de um fundo criado pela Votorantim para atender as demandas das comunidades nas ações contra o Covid-19. O aporte é coordenado pelo Instituto Votorantim em parceria com a Votorantim Cimentos.</p>
          <p>Recentemente o prefeito Guga de Paula recebeu para em seu gabinete o gerente da unidade Votorantim Cantagalo para a assinatura do Termo de Doação e Acordo de Cooperação do Programa de Apoio à Gestão Pública – Covid 19.</p>
          <p>Com essa ação, a Votorantim reafirma seu papel de empresa cidadã comprometida com o país e os brasileiros. O desafio de enfrentar os efeitos da covid-19 é enorme, mas a Votorantim reforça a crença de que, com a união de esforços de poder público, empresas e sociedade civil, trabalhando de forma coordenada e em sintonia, esta crise de saúde será superada.</p>
          <p>Segundo o Secretário de Saúde, Márcio Barbas, o apoio prestado pela Votorantim através do Instituto Votorantim tem sido importante na luta contra o coronavírus. “Este apoio, seja com os kits de EPIs ou até mesmo com as videoconferências, que tratam do apoio a gestão no combate ao coronavírus, tem demonstrado ser valoroso e nos auxilia bem nesta empreitada”.</p>
          <p>O gerente da fábrica da Votorantim Cimentos de Cantagalo, Joelcio Constantino de Oliveira, destaca o compromisso da empresa e sua atuação em prol do bem-estar das localidades em que a empresa possui operação. “Trabalhamos para ter um ambiente saudável e seguro não apenas na nossa fábrica, mas também nas nossas comunidades. Por isso, temos o prazer de contribuir para a saúde e o bem-estar da população. Juntos, vamos enfrentar e vencer essa pandemia”, afirma Joelcio.</p>
          <p>O assunto foi destaque no portal Serra News. Confira a matéria na íntegra:  <a href="https://www.serranewsrj.com.br/2020/05/instituto-votorantim-doa-kits-a-profissionais-de-saude-de-cantagalo.html" style="word-wrap: break-word;" target="_blank">https://www.serranewsrj.com.br/2020/05/instituto-votorantim-doa-kits-a-profissionais-de-saude-de-cantagalo.html <a></p>
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