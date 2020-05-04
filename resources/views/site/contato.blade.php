<section class="contato" id="contato">
<div class="container">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-5">
              <h2 class="titulo-contato">CONTATO</h2>
              <div class="divisao-6"></div>
              <p class="desc-contato">Para tirar dúvidas e contribuir com <br>
sugestões, deixe sua mensagem.</p>
                <form  method="POST" class="form-contato" action="envio-contato.php">

                    <div class="form-group">

                        <label for="nome" class="titulo-botao titulo-contato">Nome:</label>

                        <input type="text" class="form-control btn-contato btn-form-contato" name="nome" required>

                    </div>

                    <div class="form-group">

                        <label for="municipio" class="titulo-botao titulo-contato">Telefone:</label>

                        <input type="text"  class="form-control telefone btn-contato btn-form-contato" name="telefone" required>

                    </div>

                    <div class="form-group">

                        <label for="email" class="titulo-botao titulo-contato">Email:</label>

                        <input type="email" class="form-control btn-contato btn-form-contato" name="email">

                    </div>

                    <div class="form-group">

                        <label for="municipio" class="titulo-botao titulo-contato">Município:</label>

                        <input type="text" class="form-control btn-contato btn-form-contato" name="municipio" required>

                    </div>

            </div>

            <div class="col-md-1"></div>

            <div class="col-md-5">

                <div class="form-contato top-120">

                    <div class="form-group">

                        <label for="mensagem" class="titulo-botao titulo-contato">Mensagem:</label>

                        <textarea class="form-control msg-contato btn-form-contato" row="20" col="20" name="mensagem"></textarea>

                    </div>

                    <button type="submit" class="btn-form btn-submit-contato mobile-form btn-block">Enviar</button>

                </div>

                </form>

            </div>

        </div>

    </div>

</section>
  <section class="overview-block-ptb" style="padding-bottom: 20px!important; padding-top: 200px!important;">

    <div class="container">

        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-2">

                <div class="heading-title">

                   <h3 class="realizacao">Realização:</h3>

                </div>

            </div>

            <div class="col-sm-6">

                <div class="heading-title">

                    <img src="{{asset('site/img/logov2.png')}}" alt="" class="logo-v2">

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

            

             <div class="col-sm-1" ></div>

            <div class="col-sm-2">
              <h5 class="apoio"> <strong> Apoio: </strong> </h5>
                <img class="empresa img-responsive" src="{{asset('site/img/empresas/1.png')}}" alt="#">

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

            <div class="col-sm-2" style="text-align:center">

                <img class="empresa logo-5 top-30" src="{{asset('site/img/empresas/5.png')}}" alt="#" style="width:58%">

            </div>

            

        </div>

        <div class="row top-40">

            <div class="col-sm-1" style="width:3%"></div>

            

            <div class="col-sm-2" style="text-align:center">

                <img class="empresa img-responsive" src="{{asset('site/img/empresas/6.png')}}" alt="#">

            </div>

            <div class="col-sm-2">

                <img class="empresa img-responsive" src="{{asset('site/img/empresas/7.png')}}" alt="#">

            </div>

            <div class="col-sm-3 duas-logos" style="margin-right:0; text-align:center">

                <img class="" style="width: 100px;" src="{{asset('site/img/empresas/8.png')}}" alt="#">

                <img class="logo-3" style="width: 100px;" src="{{asset('site/img/empresas/9.png')}}" alt="#">

            </div>

          

            <div class="col-sm-4" style="width:35%">

                <img class="logo-4" style="width: 200px;" src="{{asset('site/img/empresas/10.png')}}" alt="#">

                <img class="logo-5" style="width: 100px;" src="{{asset('site/img/empresas/11.png')}}" alt="#">

            </div>

            

            

        </div>

        

        <div class="divisao-black" style="margin:50px 0 0"></div>

    </div>

</section>