<!DOCTYPE HTML>
<html>
	<head>
		<title>Trump App</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="/css/app.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="{{ url('/') }}"><span class="avatar"><img src="images/avatar.png" alt="" /></span></a>
						<h1>Donald Trump Quotes</h1>
					</header>

				<!-- Main -->
					<section id="main">

            @yield('content')

					</section>

			</div>

    <script src="/js/app.js"></script>
	</body>
</html>
