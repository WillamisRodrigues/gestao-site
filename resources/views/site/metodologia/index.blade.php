@extends('layouts.site.app-site')
@section('titulo','Metodologia e Organização')
@section('conteudo')
@include('layouts.site.header-noticias')
<main class="side-main"> 
<section style="margin-top:200px;" id="metodologia">
        <div class="container">
        <h2 class="section-intro__title titulo-materiais-apoio">METODOLOGIA E ORGANIZAÇÃO DA MENTORIA </h2>
        <div class="divisao-6"></div>
        <p class="desc-metodologia"> Para oferecer assessoria técnica e especializada para prefeituras e
equipes de saúde dos municípios para o gerenciamento do combate
à pandemia, adotamos uma metodologia dividida em quatro etapas:</p>
</div>
</section>
<section class="container"  id="area-metodologia">
    <div class="row">
      <div class="col-md-1 caixa-metodologia">
         <h1 class="metodologia-caixa">METODOLOGIA</h1>
      </div>
      <div class="col-md-11">
        <div class="row">
            <div class="col-md-8">
                <h1 class="etapa text-center"> ETAPA 1</h1>
                <h3 class="desc-etapa-1 ml-2"><strong> IMERSÃO e ALINHAMENTO SOBRE O FUNCIONAMENTO DA MENTORIA </strong> </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h1 class="etapa2 text-center"> ETAPA 2</h1>
                <h3 class="desc-etapa-2 ml-2">DIAGNÓSTICO + COMITÊ DE GESTÃO DE CRISE</h3>
            </div>
            <div class="col-md-4">
                <h1 class="etapa3 text-center"> ETAPA 3</h1>
                <h3 class="desc-etapa-3 ml-2">DEFINIÇÃO DOS PLANOS DE AÇÃO</h3>
            </div>
            <div class="col-md-4">
                <h1 class="etapa4 text-center"> ETAPA 4</h1>
                <h3 class="desc-etapa-4 ml-2">MONITORAMENTO DO PROJETO</h3>
            </div>
        </div>
    </div>
</section>
<!-- <section class="container" id="area-metodologia">
<div class="row">
<div class="col-md-12">
        <h1 class="etapa"> 1ª ETAPA</h1>
        <div class="col-md-12">
            <h3 class="subtitulo-etapa">ATIVAÇÃO </h3>
        </div>
        <div class="row ml-2">
            <div class="col-md-0 nopadding">
                <img src="{{asset('site/img/circulo-amarelo.png')}}" alt="" class="check-circulo">
            </div>
            <div class="col-md-10 noppading">
                <p class="check-circulo-texto">
                Estudo dos materiais e protocolos sobre a covid-19.
                </p>
            </div>
        </div>
    </div>
   <div class="col-md-12">
        <h1 class="etapa2"> 2ª ETAPA</h1>
        <div class="col-md-12">
            <h3 class="subtitulo-etapa">DIAGNÓSTICO MUNICIPAL </h3>
        </div>
        <div class="row ml-2">
            <div class="col-md-0 nopadding">
                <img src="{{asset('site/img/circulo-azul.png')}}" alt="" class="check-circulo">
            </div>
            <div class="col-md-10 noppading">
                <p class="check-circulo-texto">
                    Apresentação do projeto e alinhamento com os servidores <br> nas cinco frentes de atuação e envio do check-list;
                </p>
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-md-0 nopadding">
                <img src="{{asset('site/img/circulo-azul.png')}}" alt="" class="check-circulo">
            </div>
            <div class="col-md-10 noppading">
                <p class="check-circulo-texto">
                Realização do diagnóstico de cada município;
                </p>
            </div>
        </div>
        <div class="row ml-2">
            <div class="col-md-0 nopadding">
                <img src="{{asset('site/img/circulo-azul.png')}}" alt="" class="check-circulo">
            </div>
            <div class="col-md-10 noppading">
                <p class="check-circulo-texto">
                Implementação do Comitê de Crise.
                </p>
            </div>
        </div>
    </div>
   <div class="col-md-12">
        <h1 class="etapa3"> 3ª ETAPA</h1>
        <div class="col-md-12">
        <h3 class="subtitulo-etapa">PACTUAÇÃO DE PLANOS DE AÇÃO </h3>
        </div>
        <div class="row ml-2">
            <div class="col-md-0 nopadding">
                <img src="{{asset('site/img/circulo-verde.png')}}" alt="" class="check-circulo">
            </div>
            <div class="col-md-10 noppading">
                <p class="check-circulo-texto">
                Levantamento dos pontos de melhoria e estruturação junto, <br>
ao município, de um Plano de Ação composto por um de <br>
conjunto de iniciativas pactuadas.
                </p>
            </div>
        </div>
   </div>
   <div class="col-md-12">
        <h1 class="etapa4"> 4ª ETAPA</h1>
        <div class="col-md-12">
            <h3 class="subtitulo-etapa">MONITORAMENTO PLANO DE AÇÃO </h3>
        </div>
        <div class="row ml-2">
            <div class="col-md-0 nopadding">
                <img src="{{asset('site/img/circulo-vermelho.png')}}" alt="" class="check-circulo">
            </div>
            <div class="col-md-10 noppading">
                <p class="check-circulo-texto">
                Mentoria e monitoramento da execução dos Planos de Ação <br>
definidos com os participantes.
                </p>
            </div>
        </div>
    </div>    
</section> -->
<section class="container">
    <h1 class="atuacao-direta">ATUAÇÃO DIRETA DOS CONSULTORES DO PROGRAMA DE APOIO A GESTÃO PUBLICA COM OS MUNICÍPIOS</h1>
</section>
<section>
    <div class="container">
        <div class="row">
        <div class="col-md-3 borda-direita">
             <h1 class="t-etapa"> 1ª ETAPA</h1>
             <h3 class="s-etapa">ATIVAÇÃO DO MUNICIPIO</h3>
             <img src="{{asset('site/img/icone-telefone.png')}}" alt="" class="icone">
             <h5 class="desc-icone">Primeiro <br> contato</h5>
             <img src="{{asset('site/img/icone-globo.png')}}" alt="" class="icone mt-4">
             <h5 class="desc-icone">Alinhamento <br> sobre o <br>
             funcionamento <br> da mentoria</h5>
         </div>
         <div class="col-md-3 borda-direita">
            <h1 class="t-etapa2"> 2ª ETAPA</h1>
            <h3 class="s-etapa">DIAGNÓSTICO MUNICIPAL</h3>
            <img src="{{asset('site/img/icone-lista.png')}}" alt="" class="icone">
            <h5 class="desc-icone">Analise da situação <br>
municipal em relação <br>
ao covid-19 e <br>
atuação conjunta <br>
com o comitê de crise</h5>
         </div>
         <div class="col-md-3 borda-direita">
            <h1 class="t-etapa3"> 3ª ETAPA</h1>
            <h3 class="s-etapa">PACTUAÇÃO DE PLANOS DE AÇÃO</h3>
            <img src="{{asset('site/img/icone-caderno.png')}}" alt="" class="icone">
            <h5 class="desc-icone">Formulação/apoio a <br>
organização das <br>
iniciativas para <br>
enfrentamento da <br>
pandemia</h5>
            <img src="{{asset('site/img/icone-mapa.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">Definição dos <br>
prazos, responsáveis <br>
e resultados <br>
esperados </h5>
         </div>
         <div class="col-md-3">
            <h1 class="t-etapa4"> 4ª ETAPA</h1>
            <h3 class="s-etapa"> MONITORAMENTO PLANO DE AÇÃO</h3>
            <img src="{{asset('site/img/icone-load.png')}}" alt="" class="icone">
            <h5 class="desc-icone">Ciclos <br> Quizenais</h5>
            <img src="{{asset('site/img/icone-play.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">Acompanhamento <br>
das iniciativas</h5>
            <img src="{{asset('site/img/icone-grafico.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">Atualização dos <br>
resultados e <br>
replanejamento <br>
das ações  </h5>
         </div>
        </div>
    </div>
</section>
@include('site.contato')
</main>
@endsection