@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-image: url({{asset('site/img/banner-blue.png')}}); background-size:100% 50%;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Votorantim promove iniciativas <br>
        para combate aos efeitos do <br>
        covid-19 e anuncia doação de <br>
        R$ 50 milhões    
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 30 de março de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/1.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
          <p>O grande desafio para uma empresa que chega aos seus 100 anos, 
              como a Votorantim S.A., é entender que sua responsabilidade 
              perante às grandes questões globais é proporcional ao 
              seu tamanho e à sua história. E é exatamente 
              por isso que o Instituto Votorantim existe: 
              para ser um hub de inovação, articulação e mobilização 
              de recursos e parcerias, realizando ou apoiando 
              projetos que agreguem valor e ajudem no compromisso 
              de cumprir os Objetivos de Desenvolvimento Sustentável (ODS) 
              estabelecidos pela ONU.</p>
              
              <p>O grande desafio para uma empresa que chega aos seus 100 anos, 
              como a Votorantim S.A., é entender que sua responsabilidade 
              perante às grandes questões globais é proporcional ao 
              seu tamanho e à sua história. E é exatamente 
              por isso que o Instituto Votorantim existe: 
              para ser um hub de inovação, articulação e mobilização 
              de recursos e parcerias, realizando ou apoiando 
              projetos que agreguem valor e ajudem no compromisso 
              de cumprir os Objetivos de Desenvolvimento Sustentável (ODS) 
              estabelecidos pela ONU.</p>
              
              <p>O grande desafio para uma empresa que chega aos seus 100 anos, 
              como a Votorantim S.A., é entender que sua responsabilidade 
              perante às grandes questões globais é proporcional ao 
              seu tamanho e à sua história. E é exatamente 
              por isso que o Instituto Votorantim existe: 
              para ser um hub de inovação, articulação e mobilização 
              de recursos e parcerias, realizando ou apoiando 
              projetos que agreguem valor e ajudem no compromisso 
              de cumprir os Objetivos de Desenvolvimento Sustentável (ODS) 
              estabelecidos pela ONU.</p>
              
              <p>O grande desafio para uma empresa que chega aos seus 100 anos, 
              como a Votorantim S.A., é entender que sua responsabilidade 
              perante às grandes questões globais é proporcional ao 
              seu tamanho e à sua história. E é exatamente 
              por isso que o Instituto Votorantim existe: 
              para ser um hub de inovação, articulação e mobilização 
              de recursos e parcerias, realizando ou apoiando 
              projetos que agreguem valor e ajudem no compromisso 
              de cumprir os Objetivos de Desenvolvimento Sustentável (ODS) 
              estabelecidos pela ONU.</p>
      </div>
      <div style="height:30px;"></div>
      <h2 class="section-intro__title titulo-lista-noticias">Mais Notícias: </h2>
    <div class="divisao-6"></div>
      <div style="height:30px;"></div>
                <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                           <!-- column -->
                           <div class="col-lg-4 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                <img width="100%" src="{{asset('site/img/noticias/1.jpg')}}" alt="">
                                    <div class="card-body">
                                    <h6 class="card-title data-da-noticia">13 November, 2019</h6>
                                        <h4 class="card-title titulo-item-noticia"> <strong> Guia de Planejamento
da Atuação Social
(ISE) 2019 </strong> </h4>
                                        <p class="card-text desc-noticia"> O grande desafio para uma empresa que chega
aos seus 100 anos, como a Votorantim S.A.,
é entender que sua responsabilidade perante às
grandes questões globais é proporcional ao
seu tamanho...  </p>
                                        <a href="{{ route('post') }}" class="btn btn-leia-mais"> > Leia Mais </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-4 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                <img width="100%" src="{{asset('site/img/noticias/2.jpg')}}" alt="">
                                    <div class="card-body">
                                    <h6 class="card-title data-da-noticia">13 November, 2019</h6>
                                        <h4 class="card-title titulo-item-noticia"> <strong> Animação, engajamento e
educação na Oficina de
Mobilização do PVE 2019! </strong> </h4>
                                        <p class="card-text desc-noticia"> Não há como falar de educação sem engajar.
E foi pensando nisso que o Instituto
Votorantim preparou um evento cheio de
motivação para receber e reenergizar os...</p>
                                        <a href="{{ route('post') }}" class="btn btn-leia-mais"> > Leia Mais </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-4 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                <img width="100%" src="{{asset('site/img/noticias/3.jpg')}}" alt="">
                                    <div class="card-body">
                                    <h6 class="card-title data-da-noticia">13 November, 2019</h6>
                                        <h4 class="card-title titulo-item-noticia"> <strong>#MissãoPiauí
programas e projetos
sociais em ação! </strong> </h4>
                                        <p class="card-text desc-noticia">Em julho, representantes do Instituto
Votorantim (iV), da Votorantim Energia (VE)
e do Banco Nacional de Desenvolvimento
Econômico e Social (BNDES), bem
como acionistas...    </p>
                                        <a href="{{ route('post') }}" class="btn btn-leia-mais"> > Leia Mais </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- Row -->
                    </div>
                </div>
  </section>
  @include('site.contato')
</main>  
  @endsection