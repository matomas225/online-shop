@extends("layouts.app")
@section("main")
<div class="postinfo">
    <img src="{{Storage::url($post->img)}}" alt="image-not-loaded">
    <h1>{{$post->productName}}</h1>
    <p>{{$post->productDiscription}}</p>
    <p>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
    <p>Created By: {{$post->User()->name}}</p>
    <a href="{{route('home')}}"><button>Go Back</button></a>
</div>
@endsection