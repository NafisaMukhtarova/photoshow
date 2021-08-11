@extends('layouts.app')

@section('content')
<h3 class="text-center">{{$photo->title}}</h3>
<div class="grid-container">
    <p class="text-center">{{$photo->description}}</p>
    <a class = "button text-center" href="/albums/{{$photo->album_id}}">Back to gallery</a>
    <hr>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
    <br>
    <br>
    {!!Form::open(['action'=>['App\Http\Controllers\PhotosController@destroy',$photo->id],'method'=>'POST'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete photo',['class'=>'button alert'])}}
    {!!Form::close()!!}
    <small>Size: {{$photo->size}}</small>
</div>
@endsection