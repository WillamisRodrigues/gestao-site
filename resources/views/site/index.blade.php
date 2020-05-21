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
  <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active" >
      <div class="view">
        <a href="https://bit.ly/2zA6VeL" target="_blank">
        <img class="d-block w-100 slide-pc" src="{{asset('site/img/banner/1.jpg')}}"
          alt="First slide">
            <img class="d-block w-100 slide-mobile" src="{{asset('site/img/banner/mobilidade.jpg')}}"
          alt="First slide">
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <a href="http://institutovotorantim.org.br/municipioscontraocorona/ivm" target="_blank">
        <img class="d-block w-100 slide-pc" src="{{asset('site/img/banner/2.jpg')}}"
          alt="First slide">
            <img class="d-block w-100 slide-mobile"  src="{{asset('site/img/banner/mobilidade2.jpg')}}"
          alt="First slide">
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <a href="{{url('play/1')}}">
        <img class="d-block w-100 slide-pc" src="{{asset('site/img/banner/3.jpg')}}"
          alt="First slide">
            <img class="d-block w-100 slide-mobile"  src="{{asset('site/img/banner/mobilidade3.jpg')}}"
          alt="First slide">
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
    <section class="sobre-iniciativa" id="iniciativa">
    <img src="{{asset('site/img/pessoas.png')}}" alt="" class="pessoas" style="float:right;">
      <div class="container">
        <div class="">
        <div class="col-md-12">
          <h2 class="section-intro__title quem-somos">A INICIATIVA</h2>
          <div class="divisao"></div>
          <p class="section-intro__subtitle subtitulo-quem-somos top-40">
          Promovida pelo Instituto Votorantim, a iniciativa <span class="destaque"> Municípios contra o Coronavírus </span> é uma
nova frente de atuação do Programa de Apoio à Gestão Pública (AGP), que tem a missão
de apoiar os municípios brasileiros no gerenciamento e enfrentamento da crise relacionada
a COVID-19.
 
          </p>
          <p class="mt-2 subtitulo-quem-somos">
          Dentre as frentes da iniciativa estão:
          </p>
          <div>
          <div class="row ml-1">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa ml-2"> Programa de Apoio à Gestão Pública (AGP), com assessoria técnica e especializada
em gestão de saúde para mais de 80 prefeituras, selecionadas via edital e por meio
de indicação de municípios de influência das empresas investidas da Votorantim. </p>
            </div>
          </div>
          <div class="row ml-1">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa ml-2"> Webinars semanais em parceria com a BP – Beneficência Portuguesa de São Paulo
com temas relacionadas a Covid-19 </p>
            </div>
          </div>
          <div class="row ml-3">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa-3 ml-2">Desenvolvimento do Índice de Vulnerabilidade Municipal, uma régua de avaliação
sobre as fragilidades da saúde municipal dos territórios. </p>
            </div>
          </div>
          <p class="subtitulo-quem-somos">Além disso, uma serie de materiais de comunicação com foco em prevenção está sendo
produzido diariamente e distribuídos pelo Facebook e Linkedin do Instituto Votorantim.</p>
          <div class="row area-btn">
             <a href="http://www.institutovotorantim.org.br/municipioscontraocorona/" target="_blank" class="btn btn-sobre-votorantim">
             Saiba mais sobre o edital e confira <br>os municípios selecionados
           </a>
             
             <a href="{{route('agenda')}}" class="ml-4 btn btn-sobre-votorantim btn-ajuste">
             Confira a agenda e <br>
            temas dos Webinars
           </a>
             
             <a href="{{route('materiais-download')}}" class="ml-4 btn btn-sobre-votorantim btn-ajuste">
             Acesse os materiais <br>
de comunicação
           </a>
          </div>           

           <div style="height:90px;"></div>
        </div>
        </div>
      </div>
    </div>
    </section>
    <section class="gestao-publica" id="gestao-publica">
    <img src="{{asset('site/img/predios.png')}}" alt="" class="predios" style="float:right;">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h2 class="section-intro__title quem-somos">APOIO À GESTÃO PÚBLICA</h2>
          <div class="divisao"></div>
          <p class="section-intro__subtitle subtitulo-gestao-publica top-40">
          O Programa de Apoio à Gestão pública foi criado em 2012 pelo Instituto Votorantim com
objetivo de ampliar as capacidades do poder público municipal, fortalecendo o seu papel
como agente do desenvolvimento local. O AGP apresenta uma metodologia de atuação em
três frentes: Modernização administrativa, Ordenamento territorial e agora Gestão de
Saúde.
          </p>
          <p class="subtitulo-gestao-publica mt-4">
          Em Modernização Administrativa atua com o equilíbrio fiscal, planejamento governamental,
e com transparência e participação social. Em Ordenamento Territorial, oferece suporte
técnico à elaboração de planos setoriais (Plano Diretor, Plano de Saneamento, Habitação
ou Mobilidade) e projetos executivos para nortear a administração pública para que pleiteie
recursos em linhas de fomento específicas.
          </p>
          <div>
             <a href="http://www.institutovotorantim.org.br/" target="_blank" class="btn btn-programas">
             Para conhecer mais sobre os programas do <br>
Instituto Votorantim, clique aqui.
           </a>
           <div style="height:90px;"></div>
        </div>
        </div>
      </div>
    </div>
    </section>
    <!--================ Feature section end =================-->   
    <!--================ Pricing section start =================-->      
  
  <section class="webinar" id="webinar">
    <div class="container">
      <div class="section-intro pb-85px text-center">
        <h2 class="section-intro__title titulo-webinar">Webinars</h2>
        <div class="divisao-3"></div>
        <p class="section-intro__subtitle desc-webinar">O Instituto Votorantim, em parceria com a BP - A Beneficência Portuguesa de São Paulo
realiza semanalmente videoconferências com temas relacionados à gestão da saúde em
época de crise. Confira a agenda e inscreva-se:</p>
      </div>

      <div class="row">
        <div class="col-lg-1"></div>
           <!-- <div class="col-lg-4">
             <img src="{{asset('site/img/webinar-destaque.png')}}" alt="" class="img-destque">
              <h3 class="titulo-destaque-webinar mt-2"> 05/05 | terça-feira</h3>
              <p class="desc-destaque-webinar">Saúde do trabalhador
cuidando dos profissionais
da Saúde para que cuidem
de quem precisa ser cuidado
              </p>
              <a href="" class="btn-inscreva-webinar"> Inscrevar-se </a>
              <div class="mobile"></div>
            </div> -->
            <div class="col-md-1"></div>
            <div class="col-lg-8 ml-4 ml-mobile">
                <div class="row mb-3 espaco-mobile">
                  <div class="col-md-3 data webinar-mobile">
                    <h3 class="data"> 19/05 </h3>
                    <h3 class="desc-data">Terça-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data webinar-mobile">
                    <div class="card-block p-2">
                      <h4 class="card-title tema-webinar text-uppercase">Como Garantir o Estoque de Materiais e a Otimização dos Equipamentos em Tempos de Crise</h4>
                      
                    </div>
                  </div>
                  <div class="col-md-2 bg-data webinar-mobile">
                    <a href="https://bit.ly/3cyiMbI" target="_blank" class="btn btn-como-foi">INSCREVA-SE</a>
                  </div>
                </div>
                <div class="row mb-3  espaco-mobile">
                  <div class="col-md-3 data webinar-mobile">
                  <h3 class="data"> 21/05 </h3>
                    <h3 class="desc-data">Quinta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data webinar-mobile">
                    <div class="card-block p-2">
                    <h4 class="card-title tema-webinar text-uppercase">
                    Exames de Imagem como Aliados no Diagnóstico e Tratamento da Covid-19.
                    </h4>
                      <!-- <p class="card-text desc-tema-webinar">DESAFIOS E SOLUÇÕES</p> -->
                    </div>
                  </div>
                  <div class="col-md-2 bg-data webinar-mobile">
                  <a href="https://bit.ly/2zA6VeL" target="_blank" class="btn btn-como-foi">INSCREVA-SE</a>
                  </div>
                </div>
                <div class="row mb-2  espaco-mobile">
                  <div class="col-md-3 data webinar-mobile">
                  <h3 class="data"> 26/05 </h3>
                    <h3 class="desc-data">Terça-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data webinar-mobile">
                    <div class="card-block p-2">
                    <h4 class="card-title tema-webinar text-uppercase">Gestão de obras, modificação e amplicação de espaços em tempos de crise</h4>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data webinar-mobile">
                  <a href="https://bit.ly/2zA6VeL" target="_blank" class="btn btn-como-foi">INSCREVA-SE</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-4 mt-4">
                <a href="{{url('play/1')}}" class="btn btn-mais-webinar">Confira os webinars já realizados</a>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </section>
  <section class="indice" id="ivm" style="background-color: #0100be;">
  <img src="{{asset('site/img/mapa.png')}}" alt="" class="mapa">  
  <div>
      <div class="container">
        <h2 class="section-intro__title titulo-ivm-mapa">Índice de vulnerabilidade <br> Municipal (IVM) </h2>
        <div class="divisao-4"></div>
        <p class="section-intro__subtitle subtitulo-indice top-40">
        O IVM foi elaborado com objetivo de indicar o grau de 
vulnerabilidade de cada município brasileiro em relação 
aos impactos provocados pela pandemia de Covid-19. 
O IVM utiliza dados secundários públicos obtidos por 
meio de fontes oficiais.
        </p>
        <p class="section-intro__subtitle subtitulo-indice mt-4">
        A consulta e utilização do IVM é disponibilizada gratuitamente 
para apoiar a tomada de decisão de gestores públicos e privados 
envolvidos em ações de combate à pandemia.   
        </p>
      </div>
    </div>
  </section>
  <section class="area-sistema">
  <div class="container">
      <div class="row">
        <div class="col-md-7">
        <p class="section-intro__subtitle desc-sistema mt-4">
       O sistema permite a realização de buscas por regiões 
geográficas, pilares temáticos, níveis de criticidade e o 
cruzamento com o número de casos confirmados e 
óbitos por município, que são atualizados diariamente.
        </p>
        </div>
        <div class="col-md-5">
            <a href="http://www.institutovotorantim.org.br/municipioscontraocorona/ivm/" target="_blank" class="btn btn-ivm">Acesse e pesquise o IVM <br> de seu município</a>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="municipios" id="edital">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h2 class="contra-corona">Municípios <br> Contra o <br> Coronavírus </h2>
              <p class="desc-corona">Edital de seleção de municípios com alto risco 
epidemiológico para participação em programa 
de capacitação em gestão do combate ao coronavírus.</p>
              <a href="http://www.institutovotorantim.org.br/municipioscontraocorona/" target="_blank" class="btn btn-edital">
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
  </section> -->
  <section class="noticias" id="noticias">
    <div class="container">
      <div class="titulo-noticia">
        <h2 class="section-intro__title titulo-noticia">NOTÍCIAS</h2>
        <div class="divisao-2"></div>
        <a href="{{route('todas-noticias')}}" class="todas-noticias">VER TODAS AS NOTÍCIAS <img src="{{asset('site/img/icone-noticia.png')}}" alt=""> </a>
      </div>

      <div class="row area-noticia">
      @foreach($noticias as $noticia)
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/'.$noticia->miniatura)}}" alt="">
            </div>
            <ul class="card-pricing__list">
              <h2 class="section-intro__title titulo-item-noticia">{{$noticia->titulo}}</h2>
              <p class="section-intro__subtitle desc-noticia">
              {{$noticia->descricao}}
                 
            </p>
            <a href="{{$noticia->destino}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </section>
  <section class="material" id="material">
    <div>
      <div class="section-intro pb-85px text-center">
        <h2 class="section-intro__title material">Material de Apoio </h2>
        <div class="divisao-5"></div>
        <p class=" desc-material">
        Espaço criado para você acessar e baixar todos 
os materiais técnicos e de divulgação da 
iniciativa Municípios Contra o Corona.
        </p>
        <a href="{{route('materiais-download')}}" class="btn btn-material">Acesse e baixe o material</a>
      </div>
    </div>
  </section>
 @include('site.contato')
</main>  
  @endsection