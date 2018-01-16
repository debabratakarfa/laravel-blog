<!DOCTYPE html>
<html>
<head>
	<title>{{setting('site.title')}} - {{setting('site.description')}}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1> Latest Blog </h1>
		<div class="row">
		@foreach($posts as $post)
			<div class="col-md-3">
				<a href="/blog/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>