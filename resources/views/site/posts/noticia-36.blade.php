@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Gove, startup parceira do Instituto Votorantim, lança e-book que esclarece dúvidas sobre a aplicação dos recursos federais na saúde
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> No livro digital é possível ter acesso ao detalhamento de todas as recomendações do governo federal no combate à Covid-19 </i> 
        </h4>
         <p class="text-white"> 18 de agosto de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/33.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O Instituto Votorantim é parceiro da startup Gove, a qual acaba de lançar um e-book gratuito que visa apoiar as secretarias municipais de saúde e os gestores públicos que estão atuando no combate à covid-19. No livro digital é possível esclarecer as dúvidas sobre a aplicação dos recursos federais na saúde.</p>
       <p>"O objetivo do E-book é auxiliar os municípios a terem de forma prática e fácil maior segurança na hora de aplicar os recursos federais da Saúde. Durante esse momento de crise, é essencial que o município consiga se organizar fiscalmente e garanta a utilização do recurso correto para a finalidade correta. O e-book vem para orientar nesse sentido. Este material é complementado pela planilha que disponibilizamos para a orientar os municípios de forma mais prática na correta utilização do recurso, identificando potenciais realocações de gastos para maior eficiência fiscal", afirma o cofundador da Gove Ricardo Ramos.</p>
       <p>No livro digital estão disponíveis informações como a mudança de nomenclatura dos blocos de recursos da saúde (de manutenção e de estruturação), além das recomendações gerais para o uso desses blocos e o detalhamento de despesas de cada um. Para ter acesso ao e-book basta acessar a página <a href="https://bit.ly/39ow61z" target="_blank"> https://bit.ly/39ow61z </a> e preencher um breve formulário informando o setor de atuação e o cargo atual da pessoa que está fazendo o download</p>
        <a href="https://bit.ly/39ow61z" target="_blank" class="btn btn-material mr-4"> <i class="fa fa-book"> </i> Acessar o E-book</a>
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