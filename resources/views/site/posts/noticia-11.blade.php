@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Profissionais da saúde de Paracatu, Vazante e outros dois municípios, recebem testes rápidos de covid-19 e kits de proteção
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> O objetivo da mineradora é apoiar o trabalho dos profissionais de saúde na prevenção e combate ao novo coronavírus. </i> 
        </h4>
         <p class="text-white"> 04 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/12.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>Os municípios mineiros de Juiz de Fora, Paracatu, Três Marias e Vazante estão recebendo testes rápidos para Covid-19 e kits de Equipamentos de Proteção Individual (EPI) composto por itens como máscaras N95, máscaras descartáveis, luvas, aventais, toucas, termômetros e álcool em gel, com o objetivo de apoiar o trabalho dos profissionais de saúde na prevenção e combate ao novo coronavírus.</p>
          <p>A ação resulta da união de esforços entre o Instituto Votorantim, a Nexa e os municípios. Os recursos para a aquisição dos insumos vieram de um fundo criado pela Votorantim para atender as demandas das comunidades nas ações contra o Covid-19, além de investimentos realizados diretamente pela empresa.</p>
          <p>Essa ação reafirma o papel da Votorantim como um grupo comprometido em atuar como agente colaborativo à área da saúde dos territórios onde está presente. Para Tito Martins, CEO da Nexa, a complexidade do atual cenário exige que a sociedade, o poder público e as organizações atuem de maneira cooperativa e responsável. "Acreditamos que o contexto requer união de esforços em prol de um objetivo comum, que é garantir o bem-estar da população e preservar a vida dos profissionais que atuam na linha de frente do combate à Covid-19", destaca.</p>
          <p><strong> Saúde do trabalhador </strong> </p>
          <p>Todas as unidades da Nexa em Minas Gerais adotaram uma série de medidas preventivas, sempre priorizando a saúde e segurança de seu pessoal e em linha com as determinações das autoridades. A companhia tem monitorado constantemente o estado de saúde de seus colaboradores, com assistência médica permanente em adição às medidas de higiene e controle.</p>
          <p>O assunto foi destaque no portal Paracatu News. Confira:  <a href="https://paracatunews.com.br/noticia/7777/profissionais-da-saude-de-paracatu-vazante-e-outros-dois-municipios-recebem-testes-rapidos-de-covid-19-e-kits-de-protecao" style="word-wrap: break-word;" target="_blank">https://paracatunews.com.br/noticia/7777/profissionais-da-saude-de-paracatu-vazante-e-outros-dois-municipios-recebem-testes-rapidos-de-covid-19-e-kits-de-protecao <a></p>
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