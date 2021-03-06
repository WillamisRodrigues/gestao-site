<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
	<link rel="icon" href="{{asset('site/img/icone.png')}}" type="image/png">
  <link rel="stylesheet" href="{{asset('site/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('site/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('svg/mapa.css')}}">
  <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
 @yield('conteudo')
 <script src="{{asset('site/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('site/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('site/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <script src="{{asset('site/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('site/js/mail-script.js')}}"></script>
  <script src="{{asset('site/js/main.js')}}"></script>
  <script src="{{asset('svg/mapa.js')}}"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167899862-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167899862-1');
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script>
$('.menu_nav a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
  targetOffset = $(id).offset().top;
    
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});
</script>
<script>
$('.navegacao').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
  targetOffset = $(id).offset().top;
    
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});
</script>

<script>
  $(".dropdown").mouseover(function(){
    $("#menu-drop").addClass("show");
});
$(".dropdown").mouseout(function(){
    $("#menu-drop").removeClass("show");
});
  </script>
<script>
  jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
</script>
</body>
</html>