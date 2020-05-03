@extends('layouts.site.app-site')
@section('titulo','Home Votorantim')
@section('conteudo')
  @include('layouts.site.header')
  
  <main class="side-main">    
    <section class="banners" id="home">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{asset('site/img/banner/1.jpg')}}"
          alt="First slide">
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('site/img/banner/1.jpg')}}"
          alt="Second slide">
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('site/img/banner/1.jpg')}}"
          alt="Third slide">
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
    <!--================ Hero sm Banner end =================-->

    <!--================ Feature section start =================-->      
    <section style=" height: 550px; background-image: url('{{asset('site/img/bg-iniciativa.jpg')}}'); background-size: cover;">
      <div class="container">
        <div class="col-md-6">
         <div class="">
          <h2 class="section-intro__title quem-somos">A INICIATIVA</h2>
          <div class="divisao"></div>
          <p class="section-intro__subtitle subtitulo-quem-somos top-40">
            Promovido pelo Instituto Votorantim, o "Municípios contra o <br> 
            Coronavírus" é uma inciativa do Programa de Apoio à Gestão <br> 
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
seu tamanho e à sua história...  
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
motivação para receber e reenergizar os
mobilizadores das empresas investidas da...
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
            </div>
            <div class="col-lg-6 ml-4">
              <div class="row">
                <div class="row mb-2">
                  <div class="col-md-3 data">
                    <h3 class="data"> 22/04 </h3>
                    <h3 class="desc-data">Quarta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data">
                    <div class="card-block">
                      <h4 class="card-title tema-webinar">CUIDADOS NECESSÁRIOS
COM A EQUIPE DE SAÚDE:</h4>
                      <p class="card-text desc-tema-webinar">COMO MELHORAR O DIA A DIA
DO TRABALHADOR</p>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data">
                    <a href="#" class="btn btn-como-foi">Veja como foi</a>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-3 data">
                  <h3 class="data"> 23/04 </h3>
                    <h3 class="desc-data">Quinta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data">
                    <div class="card-block">
                    <h4 class="card-title tema-webinar">CUIDADOS NECESSÁRIOS
COM A EQUIPE DE SAÚDE:</h4>
                      <p class="card-text desc-tema-webinar">COMO MELHORAR O DIA A DIA
DO TRABALHADOR</p>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data">
                  <a href="#" class="btn btn-como-foi">Veja como foi</a>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-3 data">
                  <h3 class="data"> 24/04 </h3>
                    <h3 class="desc-data">Sexta-Feira</h3>
                   </div>
                  <div class="col-md-7 bg-data">
                    <div class="card-block">
                    <h4 class="card-title tema-webinar">CUIDADOS NECESSÁRIOS
COM A EQUIPE DE SAÚDE:</h4>
                      <p class="card-text desc-tema-webinar">COMO MELHORAR O DIA A DIA
DO TRABALHADOR</p>
                    </div>
                  </div>
                  <div class="col-md-2 bg-data">
                  <a href="#" class="btn btn-como-foi">Veja como foi</a>
                  </div>
                </div>
              </div>
              </div>
              <a href="" class="btn btn-mais-webinar">Confira os webinars já realizados</a>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="indice" id="ivm" style="background-image: url({{asset('site/img/banner-blue.png')}}); background-size:100% 50%;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-ivm">Índice de vunerabilidade dos Municípios (IVM) </h2>
        <div class="divisao-4"></div>
      </div>
           <img src="{{asset('site/img/mapa.png')}}" alt="" class="mapa">
           <div class="conteudo-ivm">
              <p class="desc-ivm">O Instituto Votorantim desenvolveu uma plataforma <br> 
              online que mapeia a evolução do índice de vulnerabilidade <br> 
              social de cada município no combate ao Covid-19.
            </p> 
          </div>
    </div>
    <a href="" class="btn btn-ivm">Acesse os dados IVN </a> 
  </section> 
  <section class="municipios" id="edital">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h2 class="contra-corona">Município <br> Contra o <br> Coronavirus </h2>
              <p class="desc-corona">Edital de seleção de municípios com alto risco <br>
epidemiológico para participação em programa <br>
de capacitação em gestão do combate ao coronavírus.</p>
              <a href="" class="btn btn-edital">Confira o edital</a>
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
        <p class="section-intro__subtitle desc-material">
        Espaço criado para você baixar todos os materiais <br>
técnicos e de divulgação da iniciativa <br>
Municípios Contra o Corona.
        </p>
        <a href="" class="btn btn-material">Acesse e baixe o material</a>
      </div>
    </div>
  </section>
  <section class="contato" id="contato">
<div class="container">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-5">
              <h2 class="titulo-contato">CONTATO</h2>
              <div class="divisao-6"></div>
              <p class="desc-contato">Para tirar dúvidas e contribuir com <br>
sugestões, deixe sua mensagem.</p>
                <form  method="POST" class="form-contato" action="envio-contato.php">

                    <div class="form-group">

                        <label for="nome" class="titulo-botao titulo-contato">Nome:</label>

                        <input type="text" class="form-control btn-contato btn-form-contato" name="nome" required>

                    </div>

                    <div class="form-group">

                        <label for="municipio" class="titulo-botao titulo-contato">Telefone:</label>

                        <input type="text"  class="form-control telefone btn-contato btn-form-contato" name="telefone" required>

                    </div>

                    <div class="form-group">

                        <label for="email" class="titulo-botao titulo-contato">Email:</label>

                        <input type="email" class="form-control btn-contato btn-form-contato" name="email">

                    </div>

                    <div class="form-group">

                        <label for="municipio" class="titulo-botao titulo-contato">Município:</label>

                        <input type="text" class="form-control btn-contato btn-form-contato" name="municipio" required>

                    </div>

            </div>

            <div class="col-md-1"></div>

            <div class="col-md-5">

                <div class="form-contato top-120">

                    <div class="form-group">

                        <label for="mensagem" class="titulo-botao titulo-contato">Mensagem:</label>

                        <textarea class="form-control msg-contato btn-form-contato" row="20" col="20" name="mensagem"></textarea>

                    </div>

                    <button type="submit" class="btn-form btn-submit-contato mobile-form btn-block">Enviar</button>

                </div>

                </form>

            </div>

        </div>

    </div>

</section>
  <section class="overview-block-ptb" style="padding-bottom: 20px!important; padding-top: 50px!important;">

    <div class="container">

        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-2">

                <div class="heading-title">

                   <h3 class="realizacao">Realização:</h3>

                </div>

            </div>

            <div class="col-sm-6">

                <div class="heading-title">

                    <img src="{{asset('site/img/logov2.png')}}" alt="" class="logo-v2">

                </div>

            </div>

        </div>

        <div class="divisao-black"></div>

    </div>

</section> 
  <section class="area-empresas" style="padding-bottom: 20px!important; ">
 
    <div class="container">
          <hr>
        <div class="row">

            

             <div class="col-sm-1" ></div>

            <div class="col-sm-2">
              <h5 class="apoio"> <strong> Apoio: </strong> </h5>
                <img class="empresa img-responsive" src="{{asset('site/img/empresas/1.png')}}" alt="#">

            </div>

            <div class="col-sm-2">

                <img class="empresa top-30" src="{{asset('site/img/empresas/2.png')}}" alt="#">

            </div>

            <div class="col-sm-2">

                <img class="empresa top-30" src="{{asset('site/img/empresas/3.png')}}" alt="#">

            </div>

            <div class="col-sm-2">

                <img class="empresa top-30" src="{{asset('site/img/empresas/4.png')}}" alt="#">

            </div>

            <div class="col-sm-2" style="text-align:center">

                <img class="empresa logo-5 top-30" src="{{asset('site/img/empresas/5.png')}}" alt="#" style="width:58%">

            </div>

            

        </div>

        <div class="row top-40">

            <div class="col-sm-1" style="width:3%"></div>

            

            <div class="col-sm-2" style="text-align:center">

                <img class="empresa img-responsive" src="{{asset('site/img/empresas/6.png')}}" alt="#">

            </div>

            <div class="col-sm-2">

                <img class="empresa img-responsive" src="{{asset('site/img/empresas/7.png')}}" alt="#">

            </div>

            <div class="col-sm-3 duas-logos" style="margin-right:0; text-align:center">

                <img class="" style="width: 100px;" src="{{asset('site/img/empresas/8.png')}}" alt="#">

                <img class="logo-3" style="width: 100px;" src="{{asset('site/img/empresas/9.png')}}" alt="#">

            </div>

          

            <div class="col-sm-4" style="width:35%">

                <img class="logo-4" style="width: 200px;" src="{{asset('site/img/empresas/10.png')}}" alt="#">

                <img class="logo-5" style="width: 100px;" src="{{asset('site/img/empresas/11.png')}}" alt="#">

            </div>

            

            

        </div>

        

        <div class="divisao-black" style="margin:50px 0 0"></div>

    </div>

</section>
</main>  
  @endsection