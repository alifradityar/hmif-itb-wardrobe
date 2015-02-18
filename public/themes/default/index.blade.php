@extends(theme_view('layout'))

@section('title')
	{{ site_title() }}
@stop

@section('content')
	<div class="top-view"> 
		<img class="logo" src="img/logo-hmif-baru.jpg" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
		<h1 data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal"> Himpunan Mahasiswa Informatika ITB </h1>
		<p data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam placerat egestas gravida. Nulla in risus vehicula, sodales lacus vitae, pulvinar ipsum.</p>
		<button type="button" class="btn btn-default" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">CLICK HERE</button>
	</div>
	<section class="home container">
		@foreach ($posts as $post)
			@include(theme_view('inc.post'))
		@endforeach

		{{ $posts->links() }}
	</section>
	<div class="achievement-banner">
		<h1> ACHIEVEMENT </h1>
		<img src="img/trophy.png">
	</div>
	<div class="container">
		<div class="achievement after-banner">
			<p>
				Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam placerat egestas gravida. Nulla in risus vehicula, sodales lacus vitae, pulvinar ipsum. Nunc quis eros in massa vulputate auctor at ut orci. Proin in sodales lorem.
			</p>
			<div class="row">
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			</div>
		</div>
	</div>
	<div class="work-banner">
		<h1> WORK </h1>
		<img src="img/work.png">
	</div>
	<div class="container">

		<div class="achievement after-banner">
			<p>
				Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam placerat egestas gravida. Nulla in risus vehicula, sodales lacus vitae, pulvinar ipsum. Nunc quis eros in massa vulputate auctor at ut orci. Proin in sodales lorem.
			</p>
			<div class="row">
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			  <div class="col-sm-4 achievement-item">
		  		<div class="box">
		  			<div style="background-image: url(img/compfest-2014.png); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" class="achievement-img">
				  	</div>
		  			
		  			<div class="item-plain">
		  				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		  				<h3>Compfest 2014</h3>
		  			</div>
		  		</div>
			  </div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="bottom">
		<div class="container">
		<div class="row">
			<div class="col-sm-4">
			  	<a>
			  		<button type="button" class="btn btn-default hvr-bounce-to-top" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">Hall of Fame</button>
			  	</a>
			  </div>
			  <div class="col-sm-4">
			  	<a>
			  		<button type="button" class="btn btn-default hvr-bounce-to-top" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">Events</button>
			  	</a>
			  </div>
			  <div class="col-sm-4">
			  	<a>
			  		<button type="button" class="btn btn-default hvr-bounce-to-top" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">Organigram</button>
			  	</a>
			  </div>
			</div>
		</div>
	</div>

@stop
