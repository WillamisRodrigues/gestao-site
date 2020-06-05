@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Webinar debate sobre as formas de garantir qualidade assistencial e segurança do paciente
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Profissionais da BP - A Beneficiência Portuguesa de São Paulo 
            falam sobre os desafios de manter a excelência nos atendimentos em meio a 
            uma pandemia </i> 
        </h4>
         <p class="text-white"> 05 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/9.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Na última quinta-feira (4) aconteceu a décima terceira palestra da iniciativa Webinar Saúde. Conduzido pelas gerente executivas da BP – A Beneficência Portuguesa de São Paulo Sandra Degrande e Priscila Rosseto, o momento foi focado na importância de se adaptar a nova realidade causada pelo coronavírus para manter e aumentar a segurança de todos dentro de um ambiente hospitalar e a qualidade nos serviços.</p>
       <p>De acordo com Priscila Rosseto, é importante lembrar que a relevância de garantir qualidade e segurança em uma unidade de saúde está diretamente ligada aos erros médicos que já aconteceram no passado e reverberaram para problemas irreversíveis. "Governos e políticas públicas existem hoje no dia a dia das unidades de saúde como forma de garantir excelência nos atendimentos em todos os aspectos.  Atualmente, no enfrentamento da pandemia, os profissionais precisam se atentar ao que se descobriu até hoje mundo afora em relação as melhores formas de combater o vírus. Ou seja, organizar a estrutura hospitalar de forma que segrege os pacientes, entender o tipo de atendimento que cada diagnóstico pede e utilizar a tecnologia como mão amiga são alguns dos caminhos que as unidades de saúde podem tomar para garantir excelência ", afirma.</p>
       <p>A gerente ainda lembrou que a realidade das unidades de saúde é de gestão de risco a todo instante, colocando em cheque a qualidade e segurança dos locais visto que estamos vivendo uma pandemia, mas esse fato já é uma premissa. "Temos um desafio nesse momento em implementar novos processos e procedimentos que vão sendo desenhados no percurso e no combate ao coronavírus", finaliza. </p>
       <p>O tema do próximo webinar será <strong> Boas Práticas Durante o Isolamento </strong> e acontecerá às 18h da próxima quinta-feira (11). Para participar, basta acessar as redes sociais do Instituto Votorantim e solicitar o link da plataforma para a palestra em questão.   </p>
        <!-- <a href="{{route('playgestao')}}" class="btn btn-material mr-4"> <i class="fa fa-play"> </i> Assista o Webinar</a>   -->
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