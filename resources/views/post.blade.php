<!DOCTYPE html>
<html>
<head>
	
	<title>{{ $post->seo_title }} | {{setting('site.title')}} - {{setting('site.description')}}</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="{{ $post->meta_description }}">
	<meta name="keywords" content="{{ $post->meta_keywords }}">

	<meta property="og:title" content="{{ $post->seo_title }}" />
	<meta property="og:description" content="{{ $post->meta_description }}" />
	<meta property="og:url" content="{{ URL::current() }}" />
	<meta property="og:image" content="{{ Voyager::image( $post->image ) }}" />

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<div class="center-block" style="text-align: center;">
					<a href="{{ URL::to('/blog') }}">
						<img src=" {{ Voyager::image( setting('site.logo')) }}">
					</a>
					<p> {{ setting('site.title') }} - {{ setting('site.description') }} </p>
				</div>


				<h1>{{ $post->title }}</h1>
				<p>
					<span class="glyphicon glyphicon-user" aria-hidden="true"> {{ $post->author->name }} </span>
					<span class="glyphicon glyphicon-ok" > {{ $post->created_at }} </span>
				</p>

				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">

				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div>

</body>
</html>