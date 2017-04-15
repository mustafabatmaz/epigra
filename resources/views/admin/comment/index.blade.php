@extends('adminlte::page')

@section('title', 'Yorumlar')

@section('content_header')
    <h1>Yorumlar</h1>
@stop

@section('content')

    @foreach($comments as $comment)
        <b> {{$comment->adSoyad}} </b>
        <p> {{$comment->content}} </p>
          <table>
    	<tr>
    		<td><a href="/kanepe/comments/delete/{{$comment->id}}"  class="btn btn-danger" role="button">Sil</a></td>
    	</tr>
    </table>
    @endforeach
@stop