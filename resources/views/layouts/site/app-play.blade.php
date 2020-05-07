<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield("titulo")</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Oswald|Lato|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{asset('playlist/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/mediaelement/mediaelementplayer.min.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/css/perfect-scrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('playlist/css/vimuse-dark.css')}}">
    
    <link rel="icon" href="{{asset('site/img/icone.png')}}" type="image/png">
  <link rel="stylesheet" href="{{asset('site/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('site/css/main.css')}}">

</head>
<body>
    @yield('conteudo')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{asset('playlist/mediaelement/mediaelement-and-player.min.js')}}"></script>
	<script src="{{asset('playlist/js/jquery-ui-1.11.4.sortable.min.js')}}"></script>
	<script src="{{asset('playlist/js/jquery.ui.touch-punch-improved.js')}}"></script>
	<script src="{{asset('playlist/js/jquery.hammer-full.min.js')}}"></script>
	<script src="{{asset('playlist/js/perfect-scrollbar.jquery.min.js')}}"></script>
	<script src="{{asset('playlist/js/jquery.vimuse.min.js')}}"></script>
	<script>
		$.fn.vimuse.defaults.cacheInterval = 1000;
		$.fn.vimuse.defaults.autoplay = true;

		$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
		$('#playlist-right').vimuse({
			playlistPosition: 'right',
      showPlaylistThumbs: true,
      youtubeFeed : true,
			enablePlaylistSort : false ,
			enableCache: true,
			playlistURL : '/cache/get-cache.php' ,
			cacheFileName: 'regular-cache.json',
			showDeleteButtons : false,
			playerFixOffset : 0 , 
		});

		
    </script>
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