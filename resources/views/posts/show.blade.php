@extends('layouts.app')

@section('content') 
    <a href="{{ route("post.index") }}" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr> 
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="{{route("post.edit", $post->id)}}" class="btn btn-default">Edit</a>
    
    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right' ]) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-default'])}}
    {!! Form::close()!!}
@endsection