@extends('layouts.site.app-site')
@section('titulo','Materiais Download Ferramentas')
@section('conteudo')
  @include('layouts.site.header-noticias')
  
  <main class="side-main"> 
    <section style="margin:200px 0px;" id="todasnoticias">
        <div class="container">
        <h2 class="section-intro__title titulo-materiais-apoio">FERRAMENTAS E CONTEÚDOS </h2>
        <div class="divisao-6"></div>
        @include('site.materiais.menu.principal')
               <div style="height:100px;"></div>
               <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                           <!-- column -->
                           <div class="col-lg-3 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/1.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> Dicas de Prevenção. </strong> </h4>
                                        <p class="card-text desc-material-down">Se precisar sair de casa é fundamental usar máscara. Segundo o Ministério da Saúde, a máscara reduz o risco de contaminação com o coronavírus. Mas é preciso, também, saber utilizá-la como, por exemplo, não tocando na sua parte frontal. </p>
                                        <a href="{{asset('site/img/materiais/1.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                 <!-- Card -->
                                 <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/2.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> Combate à FakeNews. </strong> </h4>
                                        <p class="card-text desc-material-down">
                                        Precisou sair de casa? Quando retornar a primeira coisa a fazer é colocar a roupa que estava usando para lavar e tomar um bom banho. Especialistas alertam que o vírus pode ficar na roupa e no cabelo por até 3 dias. Os cuidados com a higiene são fundamentais para evitar a contaminação com o coronavírus.
                                        </p>
                                        <a href="{{asset('site/img/materiais/2.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                 <!-- Card -->
                                 <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> Dicas de Prevenção. </strong> </h4>
                                        <p class="card-text desc-material-down">Ao chegar com as compras é muito importante higienizar as embalagens dos produtos. Temos uma dica super legal e simples para fazer a descontaminação. Após a limpeza armazene em locais limpos e arejados. Vamos vencer essa batalha contra o conronavírus? </p>
                                        <a href="{{asset('site/img/materiais/3.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/4.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> Dicas de Prevenção. </strong> </h4>
                                        <p class="card-text desc-material-down">Esta medida, recomendada pelo Ministério da Saúde, ajuda no combate à propagação do coronavírus, protegendo você e outras pessoas ao seu redor. Se precisar sair, já sabe né? Use máscara! </p>
                                        <a href="{{asset('site/img/materiais/4.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- Row -->
                    </div>
                </div>
                <div style="height:30px;"></div>
                <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                           <!-- column -->
                           <div class="col-lg-3 col-md-6 img-fluid">
                                 <!-- Card -->
                                 <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> ÍNDICE DE VULNERABILIDADE MUNICIPAL (IVM). </strong> </h4>
                                        <p class="card-text desc-material-down">
                                        O Índice de Vulnerabilidade Municipal (IVM) já está no ar. Uma ferramenta é uma iniciativa do Instituto Votorantim e aponta como cidades mais vulneráveis em relação à pandemia de coronavírus.        
                                    </p>
                                        <a href="{{asset('site/img/materiais/5.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                 <!-- Card -->
                                 <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/6.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> ÍNDICE DE VULNERABILIDADE MUNICIPAL (IVM). </strong> </h4>
                                        <p class="card-text desc-material-down">O Índice de Vulnerabilidade Municipal (IVM) já está no ar. Uma ferramenta é uma iniciativa do Instituto Votorantim e aponta como cidades mais vulneráveis em relação à pandemia de coronavírus. </p>
                                        <a href="{{asset('site/img/materiais/6.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                 <!-- Card -->
                                 <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/7.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> Dicas de Prevenção. </strong> </h4>
                                        <p class="card-text desc-material-down">Se precisar sair de casa é fundamental usar máscara. Segundo o Ministério da Saúde, a máscara reduz o risco de contaminação com o coronavírus. Mas é preciso, também, saber utilizá-la como, por exemplo, não tocando na sua parte frontal. </p>
                                        <a href="{{asset('site/img/materiais/7.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                 <!-- Card -->
                                 <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('site/img/materiais/8.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                    <h4 class="card-title titulo-item-noticia"> <strong> Dicas de Prevenção. </strong> </h4>
                                        <p class="card-text desc-material-down">Se precisar sair de casa é fundamental usar máscara. Segundo o Ministério da Saúde, a máscara reduz o risco de contaminação com o coronavírus. Mas é preciso, também, saber utilizá-la como, por exemplo, não tocando na sua parte frontal. </p>
                                        <a href="{{asset('site/img/materiais/8.jpg')}}" target="_blank" class="btn btn-leia-mais"> > Download </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- Row -->
                    </div>
                </div>
        </div>
   </section>
   @include('site.contato')
</main>  
  @endsection