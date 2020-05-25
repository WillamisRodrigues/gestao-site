@extends('layouts.site.app-site')
@section('titulo','Home Votorantim')
@section('conteudo')
  @include('layouts.site.header')
  
  <main class="side-main">    
    <section class="banners" id="home">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
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
        <img class="d-block w-100 slide-pc" src="{{asset('site/img/banner/1.1.jpg')}}"
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
        <img class="d-block w-100 slide-pc" src="{{asset('site/img/banner/2.2.jpg')}}"
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
        <img class="d-block w-100 slide-pc" src="{{asset('site/img/banner/3.3.jpg')}}"
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
            Promovida pelo Instituto Votorantim e BDNES, em parceria as empresas 
            investidas da Votorantim, a BP – Beneficência Portuguesa de São Paulo 
            e o Instituto Arapyaú, a iniciativa <span class="destaque"> Municípios 
            contra o Coronavírus </span> tem a missão de apoiar os municípios 
            brasileiros no gerenciamento e enfrentamento da crise relacionada a 
            COVID-19.
 
          </p>
          <p class="mt-2 subtitulo-quem-somos">
          Dentre as frentes da iniciativa estão:
          </p>
          <div>
          <div class="row ml-1">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa ml-2"> 
             <span class="destaque"> <a href="" class="text-white"> Mentoria e assessoria para combate ao covid-19 </a> </span>, 
             com orientação técnica e especializada em 
             gestão de saúde para mais de 80 prefeituras, 
             selecionadas via edital e por meio de indicação de 
             municípios de influência das empresas investidas da Votorantim. </p>
            </div>
          </div>
          <div class="row ml-1">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa ml-2"> 
             <span class="destaque"> <a href="" class="text-white"> Telemedicina </a></span>, oferecendo soluções de triagem, 
             autoatendimento, teleorientação e teleconsulta com profissionais 
             da área da saúde para municípios selecionados </p>
            </div>
          </div>
          <div class="row ml-3">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa-3 ml-2">
             <span class="destaque"> <a href="" class="text-white"> Webinar semanal </a></span>, em parceria com a BP – Beneficência Portuguesa de São Paulo, 
                com temas relacionadas a Covid-19, como aspectos clínicos da doença; 
                gestão da saúde e liderança na pandemia; e cuidados com a equipe de saúde.. </p>
            </div>
            <div class="row ml-3">
            <img src="{{asset('site/img/check-iniciativa.png')}}" alt="" class="check-iniciativa mt-1">
             <p class="desc-item-iniciativa-3 ml-2">
             <span class="destaque"> <a href="" class="text-white">Ferramentas e conteúdos </a></span>, 
             que apoiam os municípios em gestão e comunicação, trazendo informações sobre prevenção e contenção do Coronavírus.
             </p>
            </div>
          </div>
          <p class="subtitulo-quem-somos mt-4">
          Para apoiar essa e outras iniciativas voltadas à contenção da pandemia, o Instituto Votorantim desenvolveu o IVM - Índice de Vulnerabilidade Municipal, 
          uma régua de avaliação sobre as fragilidades da saúde municipal dos 
          territórios brasileiros. Além disso, uma serie de materiais de comunicação 
          com foco em prevenção está sendo produzido diariamente e 
          distribuídos pelo <a href="" class="text-white"> <i class="fa fa-facebook-square text-white social"></i><span class="destaque"> Facebook </span> </a> e  <a href="" class="text-white"> <i class="fa fa-linkedin-square text-white social"></i> <span class="destaque">  Linkedin </span> </a> Instituto Votorantim.
          </p>
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
          <h2 class="section-intro__title quem-somos">MENTORIA E ASSESSORIA</h2>
          <div class="divisao"></div>
          <p class="section-intro__subtitle subtitulo-gestao-publica top-40">
          Uma das frente da iniciativa é o apoio às prefeituras e equipes de saúde dos municípios 
          por meio de assessoria e mentoria especializada oferecendo suporte técnico e estratégico 
          na área da saúde pública e gestão para o planejamento de ações de controle e tratamento 
          da população infectada, normatização de comportamentos sociais conforme as orientações 
          do Ministério da Saúde e Organização 
          Mundial da Saúde e para aplicação de recursos de investimento necessários para a gestão da crise.
          </p>
          <p class="subtitulo-gestao-publica mt-4">
          A atuação oferece suporte em cinco eixos: <br>
          </p>
          <p class="subtitulo-gestao-publica mt-4">
          <span class="destaque">Governança de Crise: </span> Tomar decisões, montar uma estrutura c
          oordenada e exercer governança durante a crise.
          </p>
          <p class="subtitulo-gestao-publica">
          <span class="destaque"> Assistência: </span>Preparar o sistema de saúde 
          para prestar assistência durante a epidemia de forma resolutiva.
          </p>
          <p class="subtitulo-gestao-publica">
          <span class="destaque"> Vigilância: </span> Construir inteligência para o enfrentamento da crise a 
          partir do monitoramento de casos e dos dados demográficos e epidemiológicos da população.
          </p>
          <p class="subtitulo-gestao-publica">
          <span class="destaque"> Comunicação e distanciamento: </span> Comunicar de maneira efetiva para informar, 
          fomentar práticas de prevenção e orientar a busca pelos serviços de saúde.
          </p>
          <p class="subtitulo-gestao-publica">
          <span class="destaque"> Impactos Fiscais: </span> Análise de impactos fiscais decorrentes da crise e apoio no planejamento de recursos e medidas 
          para alcance do equilíbrio fiscal e para conter a crise econômico nos municípios.
          </p>
          <div>
          <div class="row area-btn mt-4">
             <a href="http://www.institutovotorantim.org.br/municipioscontraocorona/" target="_blank" class="btn btn-sobre-votorantim">
             Confira o edital
           </a>
             
             <a href="{{route('agenda')}}" class="ml-4 btn btn-sobre-votorantim btn-ajuste">
             Conheça a metodologia
           </a>
             
             <a href="{{route('materiais-download')}}" class="ml-4 btn btn-sobre-votorantim btn-ajuste">
             Veja os municípios selecionados
           </a>
          </div>    
           <div style="height:90px;"></div>
        </div>
        </div>
      </div>
    </div>
    </section>
    <section class="telemedicina" id="telemedicina">
    <img src="{{asset('site/img/medicos.png')}}" alt="" class="medicos" style="float:left;">
      <div class="container">
        <div class="row">
        <div class="col-md-6 offset-md-6">
          <h2 class="section-intro__title titulo-telemedicina">TELEMEDICINA</h2>
          <div class="divisao"></div>
          <p class="section-intro__subtitle subtitulo-telemedicina top-40">
          Com foco em inovação, em parceria com a Elogroup e Laura,
a frente de Telemedicina tem a proposta de oferecer soluções
de triagem automatizada, manejo clínico, protocolos médicos,
dentre outros serviços de gestão de saúde que possam ser
oferecidos aos municípios participantes do programa, atuando
com dois focos principais:
          </p>
          <img src="{{asset('site/img/aumentar-informacao.png')}}" alt="" class="mt-4" width="90%">
          <img src="{{asset('site/img/desafogar-sistema.png')}}" alt="" class="mt-2"  width="90%">
          <p class="section-intro__subtitle subtitulo-telemedicina top-40">
          O piloto foi iniciado e está em andamento em quatro municípios:
Araraquara/SP, Araripina/PE, Catanduva/SP e Muriaé/MG.
          </p>
          <div>
           <div style="height:90px;"></div>
        </div>
        </div>
      </div>
    </div>
    </section>
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
                <a href="{{url('play/aspectos')}}" class="btn btn-mais-webinar">Confira os webinars já realizados</a>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </section>
  <section class="material" id="material">
    <div>
      <div class="section-intro pb-85px text-center">
        <h2 class="section-intro__title material">Ferramentas e Conteúdos</h2>
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
 @include('site.contato')
</main>  
  @endsection