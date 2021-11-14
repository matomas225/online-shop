@extends("layouts.app")
@section("main")
<div class="cardlist">
    <div class="bar">
        <h1>Number of Products: {{count($posts)}}</h1>
    </div>

    @foreach($posts as $data)
    <div class="card">
        <img src="{{Storage::url($data->img)}}" alt="image-not-loaded">
        <h1>{{$data->productName}}</h1>
        <p>{{$data->productDiscription}}</p>
        <p>{{\Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</p>
        <p>Created By: {{$data->User()->name}}</p>
        <a href="{{route('postinfo', $data)}}"><button href="">Show More</button></a>
    </div>
    @endforeach

</div>
<div class="pages">
    {{$posts->links()}}
</div>
@endsection