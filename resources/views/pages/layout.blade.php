<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Jesse Horne Web Portfolio</title>

		<link rel="icon" id="old-favicon" href="/images/favicon_01.ico">

		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/style.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA_CODE') }}"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '{{ env('GA_CODE') }}');
		</script>

	</head>
	<body>
		<div class="navbar">
			<a class="nav-brand" href="/">Jesse Horne</a>
			<a class="nav-brand-sub" href="/">Web Developer</a>

			<div class="nav-items">
				<a id="home" class="nav-item" href="#home">Home</a>
				<a id="about" class="nav-item" href="#about">About</a>
				<a id="portfolio" class="nav-item" href="#portfolio">Portfolio</a>
				<a id="contact" class="nav-item" href="#contact">Contact</a>
			</div>
		</div>

		<div class="content">
			@yield('content')
		</div>

		<div class="footer">
			<div class="footer-left">&copy; 2018 Jesse Horne</div>

			<div class="footer-right">
				<a href="https://github.com/jessehorne"><i class="fab fa-github-square"></i></a>
				<a href="https://www.linkedin.com/in/jesseleehorne/"><i class="fab fa-linkedin"></i></a>
				<a href="https://medium.com/@jessehorne"><i class="fab fa-medium"></i></a>
				<a href="https://buymeacoff.ee/sY6gmcx"><i class="fas fa-coffee"></i></a>
			</div>
		</div>

		<script src="/js/main.js"></script>
	</body>
</html>
