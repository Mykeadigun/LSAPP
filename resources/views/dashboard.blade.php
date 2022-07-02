@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <h3>Your Blog Post</h3>
                    <a class="btn btn-primary" href="{{route('post.create')}}" >Create Post</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
