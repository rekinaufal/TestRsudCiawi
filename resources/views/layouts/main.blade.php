{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
    
    <title></title>
  </head>
  <body>
    <div class="container">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WI-RR | {{ $pageTitle }} </title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"/>
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap"/>
    </noscript>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link href="{{ url('assets/css/bootstrap.min.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ url('assets/css/font-awesome/css/all.min.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ url('assets/css/aos.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ url('assets/css/ekko-lightbox.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ url('assets/css/main.css?ver=1.1.0') }}" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header></header>
    <div class="page-content">
      <div class="div">
        <div class="ww-home-page" id="home">
          <div class="ww-wedding-announcement d-flex align-items-center justify-content-start">
            <div class="container ww-announcement-container">
              <p class="ww-couple-name ww-title" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000">Recki & Rusnia</p>
              <img class="img-fluid mt-1" src="{{ url('assets/images/laurel-1.png') }}" alt="Heart" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"/>
              <p class="h2 mt-5 ww-title" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="10">09<sup>th</sup> October, 2022</p>
            </div>
          </div>
        </div>
        @include('partials.navbar')
        @yield('content')
        <div class="ww-footer bg-light">
          <div class="container text-center py-4">
            <p class="my-0">&copy; Wonderful Wedding. All rights reserved.</p>
            <p class="mb-0">Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
          </div>
        </div>
      </div>
    </div>
    <footer></footer>
    <script src="{{ url('assets/scripts/jquery.min.js?ver=1.1.0') }}"></script>
    <script src="{{ url('assets/scripts/bootstrap.bundle.min.js?ver=1.1.0') }}"></script>
    <script src="{{ url('assets/scripts/aos.js?ver=1.1.0') }}"></script>
    <script src="{{ url('assets/scripts/ekko-lightbox.min.js?ver=1.1.0') }}"></script>
    <script src="{{ url('assets/scripts/main.js?ver=1.1.0') }}"></script>
  </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ url('assets_FE/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ url('assets_FE/style.css') }}">

	</head>
	<body>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="{{ url('assets_FE/') }}images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Company Name</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->
          			@include('partials.navbar')
					<div class="mobile-navigation"></div>
				</div>
			</header>
      		@yield('content')
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia nesciunt saepe cupiditate</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Join Us</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
									<li><a href="#">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="{{ url('assets_FE/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ url('assets_FE/js/plugins.js') }}"></script>
		<script src="{{ url('assets_FE/js/app.js') }}"></script>
		
	</body>

</html>