@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        BP e Salesforce colaboram em projeto para levar conhecimento sobre covid-19 à população brasileira
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 16 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/19.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>A BP – A Beneficência Portuguesa de São Paulo, um dos maiores polos de saúde privados do País, em parceria com a Salesforce, acaba de lançar o COVID-Info, uma plataforma de conteúdos baseada em inteligência artificial.</p>
        <p>Desenvolvida com base no Community Cloud, a plataforma visa disponibilizar informações validadas por médicos e especialistas da BP – A Beneficência Portuguesa de São Paulo para ajudar a população a entender melhor e saber como se proteger da Covid-19. A iniciativa teve também o suporte da empresa de consultoria em tecnologia Everymind, parceira Salesforce, que doou horas de trabalho para a configuração do portal da comunidade. A ferramenta online está disponível no endereço https://covidinfo.force.com.</p>
        <p>O conteúdo disponível no COVID-Info é totalmente gratuito e estará sempre atualizado, levando em consideração as diretrizes da Organização Mundial da Saúde (OMS), Ministério da Saúde, Conselho Federal de Medicina (CFM), e do Centers for Disease Control and Prevention (CDC), dos EUA. Os materiais estão agrupados por assuntos e a ferramenta permite que o cidadão também faça buscas por temas específicos de interesse e, inclusive, direcione perguntas diretamente para os especialistas da BP.</p>
        <p>"Desde o início da pandemia de Covid-19 nosso time vem produzindo uma série de conteúdos em diferentes formatos para os públicos com os quais nos relacionamos. E agora nós estamos disponibilizando todo esse acervo por meio de uma plataforma bastante amigável e intuitiva. Em tempos de desinformação, poder oferecer esse conteúdo, sempre apurado com muito rigor pelos nossos especialistas, é uma verdadeira prestação de serviço à população, especialmente para aqueles que não estão fisicamente próximos de nós", afirma Denise Santos, CEO da BP – A Beneficência Portuguesa de São Paulo.</p>
        <p>"O COVID-Info destaca o compromisso da Salesforce em apoiar as comunidades, pois as soluções usadas pela BP – A Beneficência Portuguesa de São Paulo, como o Salesforce CMS e o Community Cloud, foram fornecidas pelo Salesforce Care, um conjunto de produtos da Salesforce disponíveis gratuitamente por um período limitado, para apoiar as comunidades no combate à Covid-19", explica Fabio Costa, general manager da Salesforce Brasil. "Enquanto amplia o entendimento sobre a pandemia, a BP – A Beneficência Portuguesa de São Paulo presta um serviço inestimável e se aproxima da comunidade."</p>
        <p>Neste período de isolamento social, o Community Cloud já foi usado mundialmente por empresas e instituições para ajudar as pessoas neste novo cenário. As iniciativas incluem: a criação de um portal seguro para um laboratório que oferece testes gratuitos para Covid-19; o suporte para que uma empresa de planos de saúde lance um console de serviços clínicos em apenas algumas horas e conecte pacientes a seus fornecedores; o desenvolvimento de um aplicativo que permite que os profissionais de saúde comprem e reservem caixas de comida em pop-ups de hospitais no Reino Unido; o auxílio na entrega de pedidos de lavanderia para dezenas de hospitais na França; e o auxílio para encontrar moradias para alugar para quem não pode retornar para casa durante a pandemia.</p>
        <p>Ações de combate à pandemia</p>
        <p>Além do atendimento privado prestado aos pacientes particulares e de convênios, a BP – A Beneficência Portuguesa de São Paulo, em consonância com o ideal de filantropia que está presente no dia a dia da instituição desde a fundação, também tem atuado para contribuir com a população atendida pelo Sistema Único de Saúde (SUS). Além do atendimento direto à população, fruto de contrato com a Secretaria da Saúde do município de São Paulo, a BP também integra outras iniciativas de suporte ao enfrentamento da pandemia de Covid-19 como, por exemplo, o Programa de Apoio à Gestão Pública, do Instituto Votorantim, por meio do qual tem levado know how em gestão de crises epidemiológicas até gestores de saúde de municípios no interior do Norte e do Nordeste do País. Por meio de videoconferências semanais com executivos da BP, os gestores das localidades atendidas pelo projeto são capacitados para atuar localmente. Além disso, a BP integra a Coalizão Covid Brasil, estudo multicêntrico brasileiro que testará a eficácia contra a Covid-19 de medicamentos já usados no tratamento de outras doenças.</p>
        <p>"Aqui na BP temos um conjunto de valores que estão muito presentes nas nossas ações e um deles é Faz Bem Fazer o Bem. Essa iniciativa em parceria com a Salesforce vem se somar aos esforços que temos feito desde sempre para oferecer à sociedade um pouco do nosso conhecimento e jeito de praticar medicina, que há mais de 160 anos são reconhecidos pela sociedade brasileira" conclui Denise Santos.</p>
          <p> O assunto foi destaque no portal TI Inside. Confira: <a href="https://tiinside.com.br/16/06/2020/bp-e-salesforce-colaboram-em-projeto-para-levar-conhecimento-sobre-covid-19-a-populacao-brasileira/" style="word-wrap: break-word;" target="_blank">https://tiinside.com.br/16/06/2020/bp-e-salesforce-colaboram-em-projeto-para-levar-conhecimento-sobre-covid-19-a-populacao-brasileira/ <a></p>
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