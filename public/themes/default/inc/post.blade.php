<div class="post" data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal">
	<h1><a href="{{ Wardrobe::route('posts.show', $post->slug) }}">{{ $post->title }}</a></h1>
	<div class="date">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
	<div class="content">
		{{ $post->parsed_intro }}
	</div>
</div>
