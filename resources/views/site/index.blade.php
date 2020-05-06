@extends('layouts.site.app-site')
@section('titulo','Home Votorantim')
@section('conteudo')
  @include('layouts.site.header')
  
  <main class="side-main">    
    <section class="banners" id="home">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <a href="">
            <img class="d-block w-100" src="{{asset('site/img/banner/1.jpg')}}"
          alt="First slide">
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <a href="">
          <img class="d-block w-100" src="{{asset('site/img/banner/2.jpg')}}"
          alt="Second slide">
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <a href="">
          <img class="d-block w-100" src="{{asset('site/img/banner/1.jpg')}}"
          alt="Third slide">
        </a>
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    </section>  
    <section class="sobre-iniciativa">
    <img src="{{asset('site/img/pessoas.png')}}" alt="" class="pessoas" style="float:right;">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h2 class="section-intro__title quem-somos">A INICIATIVA</h2>
          <div class="divisao"></div>
          <p class="section-intro__subtitle subtitulo-quem-somos top-40">
          Promovido pelo Instituto Votorantim, o “Municípios contra o <br>
Coronavírus” é uma inciativa do Programa de Apoio à Gestão <br>
Pública (AGP), que visa apoiar os municípios brasileiros no <br>
gerenciamento e enfrentamento  da crise relacionada a <br>
COVID-19 promovendo webinars de temas relacionados a <br>
gestão de saúde, edital para assessoria técnica e personalizada <br>
aos municípios, além da disponibilização de materiais de <br>
comunicação sobre prevenção e combate ao coronavírus. 
          </p>
          <p class="mt-2 subtitulo-quem-somos">
            Navegue pelo site e conheça as frentes de atuação.
          </p>
           <a href="" class="btn btn-sobre-votorantim">Para saber mais sobre o Instituto Votorantim <br>
                    e os demais programas, clique aqui.
           </a>
           <div style="height:90px;"></div>
        </div>
        </div>
      </div>
    </div>
    </section>
    <!--================ Feature section end =================-->   
    <!--================ Pricing section start =================-->      
  <section class="noticias" id="noticias">
    <div class="container">
      <div class="titulo-noticia">
        <h2 class="section-intro__title titulo-noticia">NOTÍCIAS</h2>
        <div class="divisao-2"></div>
        <a href="{{route('todas-noticias')}}" class="todas-noticias">VER TODAS AS NOTÍCIAS <img src="{{asset('site/img/icone-noticia.png')}}" alt=""> </a>
      </div>

      <div class="row area-noticia">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/1.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
              <h2 class="section-intro__title titulo-item-noticia">Guia de Planejamento
da Atuação Social
(ISE) 2019</h2>
              <p class="section-intro__subtitle desc-noticia">
              O grande desafio para uma empresa que chega
aos seus 100 anos, como a Votorantim S.A.,
é entender que sua responsabilidade perante às
grandes questões globais é proporcional ao
seu tamanho...  
            </p>
            <a href="" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/2.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
              <h2 class="section-intro__title titulo-item-noticia">Animação, engajamento e
educação na Oficina de
Mobilização do PVE 2019!</h2>
              <p class="section-intro__subtitle desc-noticia">
              Não há como falar de educação sem engajar.
E foi pensando nisso que o Instituto
Votorantim preparou um evento cheio de
motivação para receber e reenergizar os...
              </p>
              <a href="" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/3.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
              <h2 class="section-intro__title titulo-item-noticia">#MissãoPiauí
programas e projetos
sociais em ação!</h2>
              <p class="section-intro__subtitle desc-noticia">
              Em julho, representantes do Instituto
Votorantim (iV), da Votorantim Energia (VE)
e do Banco Nacional de Desenvolvimento
Econômico e Social (BNDES), bem
como acionistas...    
            </p>
            <a href="" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="webinar" id="webinar">
    <div class="container">
      <div class="section-intro pb-85px text-center">
        <h2 class="section-intro__title titulo-webinar">Webninars</h2>
        <div class="divisao-3"></div>
        <p class="section-intro__subtitle desc-webinar">Realizado pelo Instituto Votorantim em parceria com <br>
a BP - A Beneficência Portuguesa de São Paulo</p>
      </div>

      <div class="row">
        <div class="col-lg-1"></div>
           <div class="col-lg-4">
             <img src="{{asset('site/img/webinar-destaque.png')}}" alt="" class="img-destque">
              <h3 class="titulo-destaque-webinar mt-2"> 05/05 | terça-feira</h3>
              <p class="desc-destaque-webinar">Saúde do trabalhador
cuidando dos profissionais
da Saúde para que cuidem
de quem precisa ser cuidado
              </p>
              <a href="" class="btn-inscreva-webinar"> Inscrevar-se </a>
              <div class="mobile"></div>
            </div>
            <div class="col-lg-6 ml-4 ml-mobile">
              <div class="row">
                <div class="row mb-2 espaco-mobile">
                  <div class="col-md-3 data webinar-mobile">
                    <h3 class="data"> 22/04 </h3>
                    <h3 class="desc-data">Quarta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data webinar-mobile">
                    <div class="card-block">
                      <h4 class="card-title tema-webinar">CUIDADOS NECESSÁRIOS
COM A EQUIPE DE SAÚDE:</h4>
                      <p class="card-text desc-tema-webinar">COMO MELHORAR O DIA A DIA
DO TRABALHADOR</p>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data webinar-mobile">
                    <a href="#" class="btn btn-como-foi">Veja como foi</a>
                  </div>
                </div>
                <div class="row mb-2  espaco-mobile">
                  <div class="col-md-3 data webinar-mobile">
                  <h3 class="data"> 23/04 </h3>
                    <h3 class="desc-data">Quinta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data webinar-mobile">
                    <div class="card-block">
                    <h4 class="card-title tema-webinar">CUIDADOS NECESSÁRIOS
COM A EQUIPE DE SAÚDE:</h4>
                      <p class="card-text desc-tema-webinar">COMO MELHORAR O DIA A DIA
DO TRABALHADOR</p>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data webinar-mobile">
                  <a href="#" class="btn btn-como-foi">Veja como foi</a>
                  </div>
                </div>
                <div class="row mb-2  espaco-mobile">
                  <div class="col-md-3 data webinar-mobile">
                  <h3 class="data"> 24/04 </h3>
                    <h3 class="desc-data">Sexta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data webinar-mobile">
                    <div class="card-block">
                    <h4 class="card-title tema-webinar">CUIDADOS NECESSÁRIOS
COM A EQUIPE DE SAÚDE:</h4>
                      <p class="card-text desc-tema-webinar">COMO MELHORAR O DIA A DIA
DO TRABALHADOR</p>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data webinar-mobile">
                  <a href="#" class="btn btn-como-foi">Veja como foi</a>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <a href="" class="btn btn-mais-webinar">Confira os webinars já realizados</a>
                  </div>
              </div>
              
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="indice" id="ivm" style="background-image: url({{asset('site/img/banner-blue.png')}}); background-size:100% 50%;">
  <img src="{{asset('site/img/mapa.png')}}" alt="" class="mapa">  
  <div>
      <div class="container">
        <h2 class="section-intro__title titulo-ivm">Índice de vulnerabilidade <br> Municipal (IVM) </h2>
        <div class="divisao-4"></div>
        <p class="section-intro__subtitle subtitulo-indice top-40">
        O IVM foi elaborado com objetivo de indicar o grau de <br>
vulnerabilidade de cada município brasileiro em relação <br>
aos impactos provocados pela pandemia de Covid-19. <br>
O IVM utiliza dados secundários públicos obtidos por <br>
meio de fontes oficiais.
        </p>
        <p class="section-intro__subtitle subtitulo-indice mt-4">
        A consulta e utilização do IVM é disponibilizada gratuitamente <br>
para apoiar a tomada de decisão de gestores públicos e privados <br>
envolvidos em ações de combate à pandemia.   
        </p>
      </div>
    </div>
  </section>
  <section class="area-sistema">
  <div class="container">
      <div class="row">
        <div class="col-md-7">
        <p class="section-intro__subtitle desc-sistema top-40">
       O sistema permite a realização de buscas por regiões <br>
geográficas, pilares temáticos, níveis de criticidade e o <br>
cruzamento com o número de casos confirmados e <br>
óbitos por município, que são atualizados diariamente.
        </p>
        </div>
        <div class="col-md-5">
            <a href="" class="btn btn-ivm">Acesse o IVM do seu município</a>
        </div>
      </div>
    </div>
  </section>
  <section class="municipios" id="edital">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h2 class="contra-corona">Municípios <br> Contra o <br> Coronavírus </h2>
              <p class="desc-corona">Edital de seleção de municípios com alto risco <br>
epidemiológico para participação em programa <br>
de capacitação em gestão do combate ao coronavírus.</p>
              <a href="" class="btn btn-edital">
              Conheça mais sobre a iniciativa. <br>
Veja os municípios selecionados. 
              </a>
            </div>
            <div class="col-md-6">
            <img src="{{asset('site/img/juntos.png')}}" alt="" class="juntos">
            </div>
        </div>
    </div>
    <div> 
      <div>
        <img src="{{asset('site/img/municipio.png')}}" alt="" width="100%" class="img-municipio">
    </div>
  </section>
  <section class="material" id="material">
    <div>
      <div class="section-intro pb-85px text-center">
        <h2 class="section-intro__title material">Material de Apoio </h2>
        <div class="divisao-5"></div>
        <p class=" desc-material">
        Espaço criado para você baixar todos os materiais <br>
técnicos e de divulgação da iniciativa <br>
Municípios Contra o Corona.
        </p>
        <a href="" class="btn btn-material">Acesse e baixe o material</a>
      </div>
    </div>
  </section>
 @include('site.contato')
</main>  
  @endsection