<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ $page_title }}</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		{!! Html::style(elixir('css/app.css')) !!}

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
	</head>
	<body>
		<header>
			<div class="container-fluid topbar">
				@yield('top_bar')
			</div>

			<div class='bg-white'>
				<div class="container pt-sm pb-sm header">
					@yield('header')
				</div>
			</div>
		</header>

		<main>
			@yield('main')
		</main>

		<footer class='mt-xl'>
			<div class='footer mt-xs'>
				<div class='container'>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							@yield('footer')
						</div>
					</div>
				</div>
			</div>
		</footer>

		{!! Html::script(elixir('js/jquery-2.1.4.min.js')) !!}
		{!! Html::script(elixir('js/bootstrap.min.js')) !!}
	</body>
</html>