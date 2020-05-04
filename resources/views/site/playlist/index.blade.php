<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Different Layouts | Vimuse - HTML5 Media Player</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Oswald|Lato|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{asset('playlist/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/mediaelement/mediaelementplayer.min.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/css/perfect-scrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('playlist/css/vimuse-dark.css')}}">

</head>
<body>

	<div class="main">
		<section>
			<div id="playlist-right"></div>
		</section>
	</div>



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
			enableCache: true,
			playlistURL : '/cache/get-cache.php' ,
			cacheFileName: 'regular-cache.json',
			showDeleteButtons : false,
			playerFixOffset : 0 , 
		});

		
	</script>
</body></html>