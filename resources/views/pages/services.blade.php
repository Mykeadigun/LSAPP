@extends('layouts.app')

@section('content')
     <h1>{{$title}}</h1>
      @if(count ($services) > 0)
        <ul class ="list-group">
            @foreach($services as $mike)
                <li class="list-group-item", >{{$mike}} </li>
            @endforeach
        </ul>    
      @endif
@endsection