@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre estoque de materiais e otimização de equipamentos em tempos de crise 
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Profissionais da BP - A Beneficiência Portuguesa de 
          São Paulo falam sobre o fluxo no controle e manutenção dos 
          aparelhos nas unidades de saúde para evitar perdas e danos </i> 
        </h4>
         <p class="text-white"> 20 de maio de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/5.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Na última terça-feira (19) aconteceu a décima palestra da iniciativa Webinar Saúde. Conduzido pelos gerentes da BP – A Beneficência Portuguesa de São Paulo, Ana Paula Melo, Marcos Iadocicco e Andreia Sant'Anna Sanches, o momento foi focado nos aspectos administrativos para reduzir os custos e danos com os materiais obtidos pelas unidades de saúde.</p>
       <p>De acordo com a gerente-executiva de farmácia e logística corporativa da BP - A Beneficiência Portuguesa de São Paulo Ana Paula Melo, a estratégia fundamental para administrar os materiais e medicamentos é a organização. "Estabelecer um fluxograma desde a compra até o uso do produto é fundamental. Isso porque com o devido cadastro de tudo que entra no ambiente hospitalar, as chances de uma otimização no uso daqueles produtos só aumenta. Mas, é necessário lembrar que a equipe precisa ter uma comunicação que flua entre as pessoas, dar o empoderamento para fazer funcionar os processos. Por mais que tenha equipamentos, estruturas e tecnologias, se não tiver as pessoas, nada adianta”, afirma.</p>
       <p>Para o gerente corporativo de engenharia clínica da BP - A Beneficiência Portuguesa de São Paulo Marcos Iadocicco, produzir e realizar um programa de manutenção dos equipamentos e máquinas que funcionam dentro da unidade de saúde é uma das principais alternativas para garantir uma longa vida desses aparelhos. "O controle dos processos para que tudo seja utilizado da melhor forma é fundamental. Exemplo disso é colocar em uma planilha toda a quantidade de máquinas existentes e em uso para assim acompanhar o desempenho desses aparelhos e, se preciso, substituí-lo antes de um problema permanente. Todavia, a peça fundamental desse controle é a relação entre as áreas da saúde. O equipamento isolado sozinho não anda. O conjunto é que faz a tomada de decisões funcionar", conclui. </p>
       <p>O tema do próximo webinar será Achados radiológicos da Covid-19 e acontecerá às 18h da próxima quinta-feira (21). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão.</p>
       <a href="{{route('playgestao')}}" class="btn btn-material mr-4"> <i class="fa fa-play"> </i> Assista o Webinar</a>  
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