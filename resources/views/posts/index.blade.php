@extends('layouts.app')

@section('content')
    <div class="row">    
        <div  class= "col-sm-11"> <h1>Posts</h1></div> <div class="col-sm-1"> <a class="btn btn-primary" href="{{route('post.create')}}"  >Create Post</a></div>
    </div>    
    @if(count($posts) > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-12 col-sm-12 mb-3">
                    <div class="card" style="">
                        <div class="card-body">
                            <h3><a href="{{ route("post.show", $post) }}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif 
     
@endsection