@extends('adminlte::page')

@section('title', 'Bloglar')

@section('content_header')
    <h1>Blog Yazıları</h1>
@stop

@section('content')
    <a href="/kanepe/blogs/new"  class="btn btn-info" role="button"> Yazı Ekle</a>
	<a href="/export"  class="btn btn-success" role="button"> Excel Çıktı Al</a><br><br>
	@foreach($blogs as $blog)
	<div class="container">
    <b>{{$blog->title}}</b><br>
    <p>{{$blog->content}}</p>
    <table>
    	<tr>
    		<td><a href="/kanepe/comments/comment/{{$blog->id}}" class="btn btn-primary">Yorumlar</a></td>
    		<td><a href="/kanepe/blogs/edit/{{$blog->id}}"  class="btn btn-warning" role="button">Blog Duzenle</a></td>
    		<td><a href="/kanepe/blogs/delete/{{$blog->id}}"  class="btn btn-danger" role="button">Sil</a></td>
    	</tr>
    </table>
    </div>
    @endforeach
@stop