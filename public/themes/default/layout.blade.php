<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ wardrobe_url('/') }}css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="{{ wardrobe_url('/') }}css/style.css">
		<link rel="stylesheet" type="text/css" href="{{ wardrobe_url('/') }}css/animate.css">
		<link rel="stylesheet" type="text/css" href="{{ wardrobe_url('/') }}css/hover.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="hvr-sweep-to-bottom custom-active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
		        <li><a class="hvr-sweep-to-bottom" href="#">BLOG</a></li>
		        <li><a class="hvr-sweep-to-bottom" href="#">ACHIEVEMENT</a></li>
		        <li><a class="hvr-sweep-to-bottom" href="#">PORTOFOLIO</a></li>
		        <li><a class="hvr-sweep-to-bottom" href="#">EVENT</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="content">
			@yield('content')
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h4> Himpunan Mahasiswa Informatika ITB </h4>
						<p> Jl. Ganesha No. 10, Bandung 40135</p>
					</div>
					<div class="col-sm-6">
						<img class="sosmed-icon" src="{{ wardrobe_url('/') }}img/facebook-icon.png"> <img class="sosmed-icon" src="{{ wardrobe_url('/') }}img/twitter-icon.png"><img class="sosmed-icon" src="{{ wardrobe_url('/') }}img/email-icon.png">
					</div>
				</div>
			</div>
		</div>

		<script src="{{ wardrobe_url('/') }}js/anijs-min.js"></script>
		<script src="{{ wardrobe_url('/') }}js/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
	</body>
</html>
