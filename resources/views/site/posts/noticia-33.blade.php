@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Incentivo do Instituto Votorantim em estudo da droga tocilizumabe é destaque no Valor
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Instituto financia pesquisa da BP - A Beneficiência Portuguesa de São Paulo sobre a eficácia do medicamento na inflamação do corpo infectado pelo coronavírus  </i> 
        </h4>
         <p class="text-white"> 06 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/29.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>O Instituto Votorantim investiu R$ 230 mil em uma pesquisa da BP - A Beneficiência Portuguesa de São Paulo que estuda a ação da droga tocilizumabe no bloqueio das atividades inflamatórias e na diminuição das lesões em diferentes órgãos causados pelo coronavírus. Os resultados devem estar prontos em agosto. O montante faz parte de um conjunto de ações do Instituto, que totalizam R$ 150 milhões, para diferentes iniciativas no combate a pandemia. O assunto foi destaque do Valor.</p>
         <p>Confira: <a href="https://valor.globo.com/empresas/noticia/2020/07/06/recursos-ajudam-a-acelerar-busca-de-tratamentos.ghtml" style="word-wrap: break-word;" target="_blank">https://valor.globo.com/empresas/noticia/2020/07/06/recursos-ajudam-a-acelerar-busca-de-tratamentos.ghtml<a></p>
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