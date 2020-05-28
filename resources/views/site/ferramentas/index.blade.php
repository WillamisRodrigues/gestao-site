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
            <p class="text-center">Em breve os conteúdos serão disponibilizados </p> 
        </div>
   </section>
   @include('site.contato')
</main>  
  @endsection