extends('adminlte::page')

@section('title', 'Yorumlar')

@section('content_header')
    <h1>Yorumlar</h1>
@stop

@section('content')
     <form method="post" action="/kanepe/comments/new">
       {!! csrf_field() !!}
        <input type="text" name="blog_id" hidden="" value="{{$blog->id}}">
        @if($comment->id == -1)
        <b>Ad SOYAD</b><input type="text" name="adSoyad" class="form-control" value="{{$comment->title}}">
        <b>İcerik</b><textarea rows="10" cols="10" class="form-control" name="content">{{$comment->content}}</textarea>
        @endif
        <button type="submit" class="btn btn-primary" name="action">Kaydet</button>
    </form>
@stop