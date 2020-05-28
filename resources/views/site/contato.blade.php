<section class="contato" id="contato">
<div class="container">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-5">
              <h2 class="titulo-contato">CONTATO</h2>
              <div class="divisao-6"></div>
              <p class="desc-contato">Para tirar dúvidas e contribuir com <br>
sugestões, deixe sua mensagem.</p>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
				@endif
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
				    <strong>{{ $message }}</strong>
				</div>
				@endif
                <form  method="POST" class="form-contato"  action="{{route('contato')}}">
                   {{ csrf_field() }}
                    <div class="form-group">

                        <label for="nome" class="titulo-botao titulo-contato-item">Nome:</label>

                        <input type="text" class="form-control btn-contato btn-form-contato" name="nome" required>

                    </div>

                    <div class="form-group">

                        <label for="municipio" class="titulo-botao titulo-contato-item">Telefone:</label>

                        <input type="text"  class="form-control telefone btn-contato btn-form-contato" name="telefone" required>

                    </div>

                    <div class="form-group">

                        <label for="email" class="titulo-botao titulo-contato-item">Email:</label>

                        <input type="email" class="form-control btn-contato btn-form-contato" name="email">

                    </div>

                    <div class="form-group">

                        <label for="municipio" class="titulo-botao titulo-contato-item">Município:</label>

                        <input type="text" class="form-control btn-contato btn-form-contato" name="municipio" required>

                    </div>

            </div>

            <div class="col-md-1"></div>

            <div class="col-md-5">

                <div class="form-contato top-120 top-mobile">

                    <div class="form-group">

                        <label for="mensagem" class="titulo-botao titulo-contato-item">Mensagem:</label>

                        <textarea class="form-control msg-contato btn-form-contato" row="20" col="20" name="mensagem"></textarea>

                    </div>

                    <button type="submit" class="btn-form btn-submit-contato mobile-form btn-block">Enviar</button>

                </div>

                </form>

            </div>

        </div>

    </div>

</section>
  <section class="overview-block-ptb padding-mobile" style=" padding-top: 200px;">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                <img src="{{asset('site/img/empresas/realizacao.png')}}" alt="" class="btn-mobile rodape-pc">
                </div>
                <hr>
  
            </div>
            <div class="col-md-12">
                <div class="heading-title">
                <img src="{{asset('site/img/rodape-mobilidade.png')}}" alt="" class="rodape-mobilidade">
                <img src="{{asset('site/img/empresas/19.png')}}" alt="" class="btn-mobile rodape-pc">
                </div>
            </div>
        </div>

        <div class="divisao-black"></div>

    </div>

</section> 

  <section class="area-empresas" style="padding-bottom: 20px!important; ">
 
    <div class="container">
          <hr>
        <div class="row">
            <div class="col-sm-2">
              <h5 class="apoio"> <strong> Apoio: </strong> </h5>
                <img class="empresa top-20" src="{{asset('site/img/empresas/1.png')}}" alt="#">
            </div>
            <div class="col-sm-2">
                <img class="empresa top-30" src="{{asset('site/img/empresas/2.png')}}" alt="#">
            </div>
            <div class="col-sm-2">
                <img class="empresa top-30" src="{{asset('site/img/empresas/3.png')}}" alt="#">
            </div>
            <div class="col-sm-2">
                <img class="empresa top-30" src="{{asset('site/img/empresas/4.png')}}" alt="#">
            </div>
            <div class="col-sm-2">
                <img class="empresa mobile-logo top-30" src="{{asset('site/img/empresas/5.png')}}" alt="#" style="width:58%">
            </div>
            <div class="col-sm-2">
                <img class="empresa top-30" src="{{asset('site/img/empresas/6.png')}}" alt="#">
            </div>
        </div>
        <div class="row top-40 non-top">
           
            <div class="col-sm-2">
                <img class="empresa top-30" src="{{asset('site/img/empresas/7.png')}}" alt="#">
            </div>
            <div class="col-sm-2">
                <img class="empresa logo-menor" src="{{asset('site/img/empresas/8.png')}}" alt="#">
            </div>
            <div class="col-sm-2">
                <img class="empresa logo-menor-2"  src="{{asset('site/img/empresas/9.png')}}" alt="#">
            </div>
            <div class="col-sm-2 mobile-w">
                <img class="empresa top-30" src="{{asset('site/img/empresas/10.png')}}" alt="#">
            </div>
            <div class="col-sm-2 mobile-w">
                <img class="empresa logo-menor-2" src="{{asset('site/img/empresas/11.png')}}" alt="#">
            </div>
            <div class="col-sm-2 mobile-w">
                <img class="empresa top-30" src="{{asset('site/img/empresas/20.png')}}" alt="#">
            </div>
            <div class="col-md-12">
            <hr class="rodape-pc">
                <div class="heading-title">
                <hr class="rodape-mobilidade">
                <img src="{{asset('site/img/rodape-mobilidade2.png')}}" alt="" class="rodape-mobilidade">
                <img src="{{asset('site/img/empresas/tecnicos.png')}}" alt="" class="btn-mobile rodape-pc">
                </div>

            </div>
        </div>
        <div class="divisao-black" style="margin:50px 0 0"></div>
    </div> 

</section>