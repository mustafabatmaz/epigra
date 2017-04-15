@extends('adminlte::page')

@section('title', 'Bloglar')

@section('content_header')
    <h1>Blog Ekle/Duzenle</h1>
@stop

@section('content')
    <form method="post" action="/kanepe/blogs/new">
        {!! csrf_field() !!}
        <input type="text" name="id" hidden="" value="{{$blog->id}}">
        <b>Baslık</b><input type="text" name="title" class="form-control" value="{{$blog->title}}">
        <b>İcerik</b><textarea rows="10" cols="10" class="form-control" name="content">{{$blog->content}}</textarea>
        <button type="submit" class="btn btn-primary" name="action">Kaydet</button>
    </form>
@stop