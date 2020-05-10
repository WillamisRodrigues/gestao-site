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
  <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
</head>
<body>
 @yield('conteudo')
 <script src="{{asset('site/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('site/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('site/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('site/js/mail-script.js')}}"></script>
  <script src="{{asset('site/js/main.js')}}"></script>
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
</body>
</html>