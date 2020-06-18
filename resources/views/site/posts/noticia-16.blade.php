@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Pacientes de Araraquara com sintomas de coronavírus terão atendimento virtual pelo WhatsApp 
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 15 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/17.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Uma parceria entre a Prefeitura, a empresa de consultoria EloGroup e o Instituto Votorantim está trazendo para Araraquara um serviço online para atendimento a pacientes com sintomas da Covid-19 e para acolhimento em casos de saúde mental.</p>
       <p>Essa assistente virtual, chamada de Bela, começa a funcionar pelo WhatsApp a partir desta segunda-feira (dia 15), no (11) 95474-2762. O morador de Araraquara só precisa adicionar esse número em sua lista de contatos e mandar uma mensagem, como um “oi” (não é para telefonar, mas apenas mandar mensagem no WhatsApp). Respostas automáticas irão guiar e orientar o paciente.</p>
       <p>No caso da Covid-19, o atendimento terá três fases: virtual (automatizada), de teleatendentes (profissionais da rede de saúde) e de teleconsultas com médicos. O paciente poderá tirar dúvidas sobre a doença, sobre a prevenção e relatar os próprios sintomas à Bela, que dará orientações e fará o acompanhamento do caso. Se necessário, profissionais de saúde poderão prescrever medicamentos ou recomendar que a pessoa procure uma unidade de saúde.</p>
       <p>“É uma tecnologia a partir do Instituto Votorantim e que vem agregar aos serviços já prestados pela Prefeitura em relação à Covid-19, como o nosso 0800 do Disque Saúde. Hoje se faz muita coisa pelo WhatsApp. O paciente poderá ter orientação e teleatendimento”, afirma o coordenador de Atenção Especializada da Secretaria de Saúde, Edison Rodrigues Filho.</p>
       <p>“Nós vamos reutilizar nessa plataforma o nosso próprio pessoal que já trabalha nos plantões de atendimento, com nossa equipe de médicos, enfermeiros, psicólogos e atendentes”, ressalta Edison.</p>
       <p>“Nós vamos reutilizar nessa plataforma o nosso próprio pessoal que já trabalha nos plantões de atendimento, com nossa equipe de médicos, enfermeiros, psicólogos e atendentes”, ressalta Edison.</p>
       <p>Ao contrário do atendimento virtual, as teleconsultas com a equipe médica só devem ser iniciadas a partir da próxima semana.</p>
       <p>“A Bela vai perguntar os sintomas e o paciente será classificado em níveis de cuidados, além de responder um cadastro para monitoramento. A triagem perguntará os sintomas básicos e passará para o teleatendimento”, explica Gabriela Vieira Alves, consultora da EloGroup.</p>
       <p>A consultora ressalta que estados como Alagoas e Ceará, além da cidade de Muriaé/MG, são exemplos de locais que já utilizaram a plataforma Bela para o atendimento virtual de pacientes com sintomas do novo coronavírus.</p>
       <p>A consultora ressalta que estados como Alagoas e Ceará, além da cidade de Muriaé/MG, são exemplos de locais que já utilizaram a plataforma Bela para o atendimento virtual de pacientes com sintomas do novo coronavírus.</p>
       <p>O assunto foi destaque no portal Araraquara Agora. Confira:  <a href="https://araraquaraagora.com/2020/06/15/pacientes-de-araraquara-com-sintomas-de-coronavirus-terao-atendimento-virtual-pelo-whatsapp/" style="word-wrap: break-word;" target="_blank">https://araraquaraagora.com/2020/06/15/pacientes-de-araraquara-com-sintomas-de-coronavirus-terao-atendimento-virtual-pelo-whatsapp/ <a></p>
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