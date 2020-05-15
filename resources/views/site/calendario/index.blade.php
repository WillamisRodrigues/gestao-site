@extends('layouts.site.app-site')
@section('titulo','Calendario')
@section('conteudo')
  @include('layouts.site.header-noticias')       
  <section  style="margin:200px 0px; width:100%;" id="agenda">
        <div class="container">
            <div class="titulo-noticia">
                <h2 class="section-intro__title titulo-lista-noticias">Agenda WEBINARS </h2>
                <div class="divisao-6"></div>
            </div>
            <h2 class="mes"> <i class="fa fa-calendar"></i> Maio </h2>
            <hr>
            <div class="card mt-4">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="{{asset('site/img/agenda-web.jpg')}}" class="card-img-top w-100" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="titulo">Garantindo a continuidade do negócio - Dispensação e fornecimento de materiais </h5>
                    <p class="card-text area-mediador">
                        <span class="participante"> Participante: </span> Ana Paula Melo <br> 
                        <span class="participante"> Mediador (a): </span> Andréia Sanches
                    </p>
                    <p class="card-text desc-agenda">
                    Como garantir o estoque e Abordagem para manutenção de equipamentos de um jeito inteligente.
                    </p>
                    <a href="https://bit.ly/3cyiMbI" target="_blank" class="btn btn-agenda">INSCREVA-SE</a>
                </div>
                <div class="footer">
                    <p class="text-rodape"> <i class="fa fa-clock"></i>  19 de maio às 18h</p>
                </div>
            </div>
        </div>
    </div>
     <!-- novo post -->
     <div class="card mt-4">
        <div class="row no-gutters">
        <div class="col-md-5">
                <img src="{{asset('site/img/agenda-web.jpg')}}" class="card-img-top w-100" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="titulo">Achados radiológicos da Covid-19 </h5>
                    <p class="card-text area-mediador">
                        <span class="participante"> Participante: </span> Pablo Rydz <br> 
                        <span class="participante"> Mediador (a): </span> Carlos Longo
                    </p>
                    <p class="card-text desc-agenda">
                    Sinalizar no processo de comunicação para que os médicos sejam convocados para este webinar.
                    </p>
                    <a href="https://bit.ly/2zA6VeL" target="_blank" class="btn btn-agenda">INSCREVA-SE</a>
                </div>
                <div class="footer">
                    <p class="text-rodape"> <i class="fa fa-clock"></i>  21 de maio às 18h</p>
                </div>
            </div>
        </div>
    </div>
        <!-- fim post -->
        <!-- novo post -->
     <div class="card mt-4">
        <div class="row no-gutters">
        <div class="col-md-5">
                <img src="{{asset('site/img/agenda-web.jpg')}}" class="card-img-top w-100" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="titulo">Gestão de obras, modificação e amplicação de espaços em tempos de crise </h5>
                    <p class="card-text area-mediador">
                        <span class="participante"> Participante: </span> Cintia Attis / Clayton Luiz Barbosa <br> 
                        <span class="participante"> Mediador (a): </span> Monica Morgese Alves
                    </p>
                    <p class="card-text desc-agenda">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, dignissimos nemo, nam nostrum deserunt autem iusto optio voluptate sed ea qui id fugit error esse dicta ipsam voluptatum corrupti ex. 
                    </p>
                    <a href="https://bit.ly/2SUjR62" target="_blank" class="btn btn-agenda">INSCREVA-SE</a>
                </div>
                <div class="footer">
                    <p class="text-rodape"> <i class="fa fa-clock"></i>  26 de maio às 18h</p>
                </div>
            </div>
        </div>
    </div>
        <!-- fim post -->
        <!-- novo post -->
     <div class="card mt-4">
        <div class="row no-gutters">
        <div class="col-md-5">
                <img src="{{asset('site/img/agenda-web.jpg')}}" class="card-img-top w-100" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="titulo">Manejo clínico do paciente com Covid-19 </h5>
                    <p class="card-text area-mediador">
                        <span class="participante"> Participante: </span> Viviane Veiga / Fernando Ramos <br> 
                        <span class="participante"> Mediador (a): </span> Rodrigo Almeida
                    </p>
                    <p class="card-text desc-agenda">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, dignissimos nemo, nam nostrum deserunt autem iusto optio voluptate sed ea qui id fugit error esse dicta ipsam voluptatum corrupti ex. 
                    </p>
                    <a href="https://bit.ly/2SUjR62" target="_blank" class="btn btn-agenda">INSCREVA-SE</a>
                </div>
                <div class="footer">
                    <p class="text-rodape"> <i class="fa fa-clock"></i>  28 de maio às 18h</p>
                </div>
            </div>
        </div>
    </div>
        <!-- fim post -->
        </div>
  </section>
   @include('site.contato')
  @endsection