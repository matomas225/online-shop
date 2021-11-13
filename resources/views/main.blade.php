@extends("layouts.app")
@section("main")
<?php
$counter = 0;
?>
@foreach ($posts as $data)
    <?php
    $counter++;
    ?>
@endforeach
<div class="cardlist">
    <div class="bar">
        <h1>Number of Products: {{$counter}}</h1>
    </div>

    @foreach($posts as $data)
    <div class="card">
        <img src="{{ $data->img }}" alt="{{ $data->imgName}}">
        <h1>{{$data->productName}}</h1>
        <p>{{$data->productDiscription}}</p>
        <button href="">Show more</button>
    </div>
    @endforeach
</div>

@endsection