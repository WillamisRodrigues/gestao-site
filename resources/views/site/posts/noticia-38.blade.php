@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Gove desenvolve e-book para auxiliar municípios na elaboração da Lei Orçamentária Anual
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Manual está disponibilizado no site da startup Gove e já pode ser utilizado pelos gestores municipais </i> 
        </h4>
         <p class="text-white"> 24 de setembro de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/36.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
      <p>A startup Gove, que tem o objetivo de transformar o setor público por meio de tecnologias que simplificam o dia a dia dos gestores, lançou mais uma ferramenta que otimiza o processo de eficiência da administração pública. Trata-se do Manual de Previsão de Receitas, uma ferramenta feita para o município elaborar sua Lei Orçamentária Anual (LOA). </p>
      <p>Dentro do Manuel é possível os gestores conferirem orientações sobre realização da previsão de receitas para 2021 assim como as fórmulas para calcular cada uma dela. O Manual conta ainda com especificações sobre cada tipo de receita e com dicas em relação a construção de um bom planejamento orçamentário.</p>
      <p>O material está disponível no site do Gove e já pode ser utilizado pelos gestores para a elaboração Lei Orçamentária Anual de 2021, a qual possui prazo de envio se encerrando nas próximas semanas para a grande maioria dos municípios.</p>
        
        <a href="https://materiais.gove.digital/manual-previsao-de-receitas" target="_blank" class="btn btn-material mr-4"> <i class="fa fa-book"> </i> Acessar o E-book</a>
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