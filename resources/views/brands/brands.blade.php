@extends('layouts.app')
@section('content')
<div class="container text-center">
<ul class="">
        @foreach($brands as $brand)
        <li class=""><a href="brand/{{$brand->id}}"><img class="rounded mt-3 ml-3 mr-3" src="/images/card100x180/pexels-photo-1187987 (1).jpeg" alt=""><h3 class="mt-2">{{$brand->brand_name}}</h3></a></li>
           @endforeach
        </ul>
</div>
@endsection