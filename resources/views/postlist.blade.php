@extends("layouts.app")
@section("main")
<div class="cardlist">
    <div class="bar">
        <h1>Number of Products: {{count($posts)}}</h1>
    </div>

    @foreach($posts as $post)
    <div class="card">
        <img src="{{Storage::url($post->img)}}" alt="image-not-loaded">
        <h1>{{$post->productName}}</h1>
        <p>{{$post->productDiscription}}</p>
        <p>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
        <p>Created By: {{$post->User()->name}}</p>
        <a href=""><button href="">Edit</button></a>
        <a href=""><button href="">Delete</button></a>
    </div>
    @endforeach

</div>
<div class="pages">
    {{$posts->links()}}
</div>
@endsection