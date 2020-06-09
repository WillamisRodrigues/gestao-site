@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Prefeitura inicia sistema de telemedicina para pessoas com sintomas de Covid-19 em Muriaé
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> O serviço é gratuito e o atendimento pode ser feito pelo WhatsApp, Facebook ou Central de Informações; saiba como acessar. </i> 
        </h4>
         <p class="text-white"> 01 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/10.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>Um novo serviço de telemedicina está disponível a partir desta segunda-feira (1º) para pessoas com sintomas da Covid-19 em Muriaé. O atendimento é gratuito e disponibilizado pela Prefeitura Municipal.</p>
        <p>De acordo com o Executivo, os cidadãos podem acionar o serviço de três formas:</p>
        <ol>
         <li>WhatsApp para o número (11) 95474-2762;</li>
         <li>Mensagem pela página da Prefeitura no Facebook;</li>
         <li>Central de Informações sobre Coronavírus.</li>
         </ol>
         <p>Ao entrar em contato através de qualquer um dos três canais, o paciente será atendido pela assistente virtual Bela. Ela será responsável pelas perguntas iniciais sobre sintomas, estado de saúde e possíveis fatores de risco.</p>
         <p>O paciente poderá ser convidado a receber uma chamada de vídeo, na qual irá conversar diretamente com um médico. Na consulta online, o profissional de saúde enviará, através do próprio aplicativo, a prescrição contendo assinatura digital. O documento deve então ser impresso para apresentação na compra dos medicamentos receitados.</p>
         <p>A plataforma online de atendimento foi desenvolvida pelo Instituto Votorantim e disponibilizada para as prefeituras que integram o programa "Municípios Contra o Coronavírus".</p>
         <p> A ferramenta foi destaque no portal G1 Zona da Mata. Confira a matéria:  <a href="https://g1.globo.com/mg/zona-da-mata/noticia/2020/06/01/prefeitura-inicia-sistema-de-telemedicina-para-pessoas-com-sintomas-de-covid-19-em-muriae.ghtml" style="word-wrap: break-word;" target="_blank">https://g1.globo.com/mg/zona-da-mata/noticia/2020/06/01/prefeitura-inicia-sistema-de-telemedicina-para-pessoas-com-sintomas-de-covid-19-em-muriae.ghtml <a></p>
        </div>
      <div style="height:30px;"></div>
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