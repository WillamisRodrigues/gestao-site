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
<section class="container" id="area-metodologia">
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
        <h3 class="subtitulo-etapa">PACTAÇÃO DE PLANOS DE AÇÃO </h3>
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
</section>
<section>
    <div class="container">
        <div class="row">
        <div class="col-md-3 borda-direita">
             <h1 class="t-etapa"> 1ª ETAPA</h1>
             <h3 class="s-etapa">ATIVAÇÃO DO MUNICIPIO</h3>
             <img src="{{asset('site/img/icone-telefone.png')}}" alt="" class="icone">
             <h5 class="desc-icone">PRIMEIRO <br>
                  CONTATO</h5>
             <img src="{{asset('site/img/icone-globo.png')}}" alt="" class="icone mt-4">
             <h5 class="desc-icone">PESQUISA SOBRE MUNICÍPIOS</h5>
         </div>
         <div class="col-md-3 borda-direita">
            <h1 class="t-etapa2"> 2ª ETAPA</h1>
            <h3 class="s-etapa">DIAGNÓSTICO MUNICIPAL</h3>
            <img src="{{asset('site/img/icone-lista.png')}}" alt="" class="icone">
            <h5 class="desc-icone">CHECKLIST <br> ARAPYAÚ</h5>
            <img src="{{asset('site/img/icone-lista.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">PESQUISAS <br> ESPECIFÍCAS</h5>
         </div>
         <div class="col-md-3 borda-direita">
            <h1 class="t-etapa3"> 3ª ETAPA</h1>
            <h3 class="s-etapa">PACTUAÇÃO DE PLANOS DE AÇÃO</h3>
            <img src="{{asset('site/img/icone-caderno.png')}}" alt="" class="icone">
            <h5 class="desc-icone">FORMALIZAÇÃO DA <br> ATA DE DIAGNÓSTICO</h5>
            <img src="{{asset('site/img/icone-rede.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">CÁLCULO DA MATURIDADE <br> MUNICIPAL POR FRENTE </h5>
            <img src="{{asset('site/img/icone-mapa.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">DEFINIÇÃO DE TRILHAS <br> DE INICIATIVA</h5>
         </div>
         <div class="col-md-3">
            <h1 class="t-etapa4"> 4ª ETAPA</h1>
            <h3 class="s-etapa"> MONITORAMENTO PLANO DE AÇÃO</h3>
            <img src="{{asset('site/img/icone-load.png')}}" alt="" class="icone">
            <h5 class="desc-icone">CICLOS <br> QUINZENAIS</h5>
            <img src="{{asset('site/img/icone-play.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">ACOMPANHAMENTO <br> DAS INICIATIVAS</h5>
            <img src="{{asset('site/img/icone-grafico.png')}}" alt="" class="icone mt-4">
            <h5 class="desc-icone">ATUALIZAÇÃO DE PAÍNEIS DE CONTROLE </h5>
         </div>
        </div>
    </div>
</section>
@include('site.contato')
</main>
@endsection