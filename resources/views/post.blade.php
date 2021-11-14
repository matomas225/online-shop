@extends("layouts.app")
@section("main")
<x-postform :post="$post ?? ''" :editPage="$editPage ?? false"/>

@endsection