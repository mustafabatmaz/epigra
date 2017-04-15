<html>
	<header>
		<title>Blog</title>
		<center><h2>Blog</h2><center>
	</header>

	<body>
		@foreach($blogs as $blog)
			<div class="media">
			  <div class="media-body">
			    <h4 class="media-heading"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h4>
			    <p>{{$blog->content}}</p>
			  </div>
			</div>
		@endforeach
		
	</body>

	<footer>
		
	</footer>

</html>