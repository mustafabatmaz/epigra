<html>
	<header>
		<title>Blog</title>
		<center><h2>{{$blog->title}}</h2><center>
		<center><p>{{$blog->content}}</p><center>

	</header>

	<body>
	<h2>Yorumlar</h2><br>
		@foreach($comments as $comment)
			<div class="media">
			  <div class="media-body">
			    <h4 class="media-heading"><b>{{$comment->adSoyad}}</b></h4>
			    <p>{{$comment->content}}</p>
			  </div>
			</div>
		@endforeach
		<br><h2><a href="/../new/{{$blog->id}}"  class="btn btn-info" role="button"> Yorum Ekle</a><br><br>
</h2><br>

		
	</body>

	<footer>
		
	</footer>

</html>