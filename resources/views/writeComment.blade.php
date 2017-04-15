<html>
	<header>
		<title>Blog</title>
		<center><h2>{{$blog->title}}</h2><center>
		<center><p>{{$blog->content}}</p><center>

	</header>

	<body>
		     <form method="post" action="/kanepe/comments/new">
		       {!! csrf_field() !!}
		        <input type="text" name="id"  hidden="" value="{{$comment->id}}">
		        <input type="text" name="blog_id" hidden="" value="{{$blog->id}}">
		        <b>Ad SOYAD</b><input type="text" name="adSoyad" class="form-control" >
		        <b>İcerik</b><textarea rows="10" cols="10" class="form-control" name="content"></textarea>
		        
		        <button type="submit" class="btn btn-primary" name="action">Kaydet</button>
		    </form>
		</form>
		
	</body>

	<footer>
		
	</footer>

</html>