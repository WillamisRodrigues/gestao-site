@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre administração de recursos hospitalares nas unidades de saúde
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Profissionais da BP - A Beneficiência Portuguesa de São Paulo falam sobre as formas de otimização de atendimentos e manejos clínicos para cada tipo de paciente</i> 
        </h4>
         <p class="text-white"> 03 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/27.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Na última quinta-feira (2) aconteceu mais uma edição da iniciativa Webinar Saúde. Conduzido pelos coordenadores da BP – A Beneficência Portuguesa de São Paulo Felipe Reis e Tomaz Aquino, o momento foi focado em discutir estratégias no cenário de escassez de recursos e fazer uma reflexão sobre as questões bioéticas envolvidas. </p>
       <p>De acordo com o coordenador Felipe Reis, durante uma pandemia, é essencial tentar antecipar cenários difíceis. "Itens como máquinas de hemodiálise, leitos e ventiladores precisam estar disponíveis em um número satisfatório dentro do espaço daquela unidade de saúde. Isso porque é através desses itens que acontecerá os tratamentos específicos para cada paciente contaminado que chegar na unidade de saúde. Inclusive, avaliar o histórico de saúde de todos os pacientes é a chave para todo tratamento", afirma. </p>
       <p>Para o coordenador Tomaz Aquino, analisar onde o paciente está na trajetória de adoecimento é fundamental para que as atitudes médicas sejam acertivas. "Devemos sempre nos ater aos sintomas e o histórico daquele paciente para sermos racionais no atendimento e tratamento. Exemplo disso é que pacientes com doenças crônicas progressivas avançadas não são candidatos a medidas avançadas de suporte de vida e sim cuidados paleativos ", completa.

</p>
<p>O momento ainda contou com a participação do coordenador Administrativo Financeiro do Município de Sobral, Ismael Ferreira. Localizada no Ceará, a cidade faz parte do programa fomentado pelo Instituto Votorantim  "Municípios Contra o Coronavírus". De acordo com Ismael, Sobral precisou se reprogramar para enfrentar a pandemia. "Existem aqui dois hospitais que tinham em média 50 leitos de UTI, Mas como Sobral é uma cidade sede de uma macrorregião com vários municípios em volta, se agrava mais a necessidade de atendimento. É um cenário bastante grave diante de uma pandemia como essa. Saber lidar com os recursos disponíveis e administrar os atendimentos em busca de otimizá-los são alternativas chaves", finaliza.</p>
<p>O tema do próximo webinar será <strong> Como organizar a atenção primária na pandemia, incluindo o papel de cada profissional </strong> e acontecerá às 18h da próxima quinta-feira (9). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão. </p>
       
        <a href="{{route('play')}}" class="btn btn-material mr-4"> <i class="fa fa-play"> </i> Assista o Webinar</a>
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