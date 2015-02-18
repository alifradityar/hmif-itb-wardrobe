@extends(theme_view('layout'))

@section('title')
	{{ $post->title }}
@stop

@section('content')
	<div class="top-view-short"> 
	</div>
	<section class="container">
		<div class="post">
			<h1 class="title">{{ $post->title }}</h1>

			{{ $post->parsed_content }}

			@include(theme_view('inc.tags'))
		</div>
	</section>
@stop

