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
    <div class="bar">
        <h1>Users: {{count($users)}}</h1>
    </div>
    @foreach($users as $user)
    <div class="users">
        <p>Name: {{$user->name}}</p>
        <p>Role: {{$user->role}}</p>
        <form action="{{route('user.edit', $user)}}" method="POST">
            @csrf
            @method("patch")
            <button type="submit">Make admin</button>
        </form>
        <form action="{{route('user.edit', $user)}}" method="POST">
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