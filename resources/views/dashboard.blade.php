@extends("layouts.app")
@section("main")

<div class="cardlist">
    <div class="bar">
        <h1>All Posts: {{count($posts)}}</h1>
    </div>

    @foreach($posts as $data)
    <div class="card">
        <img src="{{Storage::url($data->img)}}" alt="image-not-loaded">
        <h1>{{$data->productName}}</h1>
        <p>{{$data->productDiscription}}</p>
        <p>{{\Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</p>
        <p>Created By: {{$data->User()->name}}</p>
        <a href="{{route('postinfo', $data)}}"><button href="">Show More</button></a>
        <a href="{{route('post.edit', $data)}}"><button href="">Edit</button></a>
        <form action="{{route('post.edit', $data)}}" method="POST">
            @csrf
            @method("delete")
            <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach

</div>
<div class="pages">
    {{$posts->links()}}
</div>
@endsection