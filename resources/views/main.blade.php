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
        <button href="">Show more</button>
    </div>
    @endforeach
</div>

@endsection