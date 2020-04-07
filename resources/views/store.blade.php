@extends('plantilla')

@section('seccion')

<div class="card my-4">

    <div class="card-header">
      <h4 class="card-title text-center text-primary">{{$Movie->name}}</h4>
    </div>


    <iframe width="800"
    height="500"
    src="{{$Movie->link}}" 
    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen
    class="card-img-top"></iframe>

    <div class="card-body">
      <h5 class="text-primary">Description:</h5>
      <p class="card-text">{{$Movie->description}}</p>
      <h5 class="text-primary">Cast:</h5>
      <p class="card-text">{{$Movie->cast}}</p>
      <h5 class="text-primary">Director:</h5>
      <p class="card-text">{{$Movie->director}}</p>
    </div>
 
</div>

@endsection