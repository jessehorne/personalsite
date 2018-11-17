@extends('pages.layout')

@section('content')
	<div class="view-source">
		<a href="https://github.com/jessehorne/personalsite">view source</a>
	</div>

	<div id="section-home" class="section section-home">
		<div class="section-banner">My name is <b>Jesse</b>. I'm a self-taught developer who likes to build <i>things</i>.</div>
	</div>

	<div id="section-about" class="section section-about">
		<div class="section-header">About</div>
		<div class="section-text">I'm a developer currently living in Des Moines, Iowa. I've worked a 9 to 5 for 2 years and have freelanced on and off for 6 years.<br><br>My professional experience has almost entirely been dedicated to implementing and maintaing backend infastructure in PHP and Python. I've used many frameworks but I'm most familiar with Laravel (which this site uses) and Flask. I'm very familiar with WordPress and have written several plugins and themes from scratch for clients.<br><br>I obsess over my craft. I love learning and I crave a challenge. My goals are to build awesome applications, expand my list of satisfied clients who benefit from my services and I have a strong desire to give back to the communities that have fostered my growth as a developer.</div>
	</div>

	<div id="section-portfolio" class="section section-portfolio">
		<div class="section-header">Portfolio</div>
		<div class="section-clients">
			<div class="section-client">
				<a href="http://binarycocoa.com/">
					<img id="bc-client" src="https://d2isyty7gbnm74.cloudfront.net/unsafe/200x0/https://beanstalk-production-f.squarecdn.com/files/ca2327ce67e23b6daa5d69eecf443b0c/original.png">
				</a>
			</div>
			<div class="section-client">
				<a href="https://brightlightconstructionsolutions.com/">
					<img id="bl-client" src="/images/bl.png">
				</a>
			</div>
			<div class="section-client">
				<a href="https://quarrymill.com/wp-content/themes/theme-thequarrymill/dist/images/logo-thequarrymill.png">
					<img id="qm-client" src="https://quarrymill.com/wp-content/themes/theme-thequarrymill/dist/images/logo-thequarrymill.png">
				</a>
			</div>
		</div>
	</div>

	<div id="section-contact" class="section section-contact">
		<div class="section-header">Contact</div>
		<form method="POST" action="https://formspree.io/j.horne2796@gmail.com">
			<input type="email" name="email" placeholder="Email"><br>
			<textarea name="message" placeholder="Message"></textarea><br>
			<div class="form-button"><button type="submit">Contact</button></div>
		</form>
	</div>
@endsection
