@extends("layouts.app")
@section("main")
<div class="postinfo">
    <img src="{{Storage::url($post->img)}}" alt="image-not-loaded">
    <h1>{{$post->productName}}</h1>
    <p>{{$post->productDiscription}}</p>
    <p>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
    <p>Created By: {{$post->User()->name}}</p>
    <a href="{{route('home')}}"><button>Go Back</button></a>

    <form action="{{route('comment', $post)}}" method="POST">
        @csrf
        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
        <button type="submit">Comment</button>
    </form>
    <h1>Comments:</h1>
    @foreach($comments as $comment)
    <div class="comments">
        <p>comment by: {{$comment->User()->name}}</p>
        <p>{{$comment->comment}}</p>
    </div>
    @endforeach

</div>
@endsection