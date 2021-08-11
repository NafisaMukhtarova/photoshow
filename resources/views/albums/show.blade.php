@extends('layouts.app')

@section('content')
<h1 class="text-center">{{$album->name}}</h1>
<div class = "grid-container"  >
    <a class = "button secondary" href="/">Go back</a>
    <a class = "button" href="/photos/create/{{$album->id}}">Upload</a>
</div>
<hr>
@if(count($album->photos)>0)

<div id="photos">
<div class = "grid-x text-center"  >
    
    
    
    @foreach($album->photos as $photo)
        <div class = "cell large-4">
            <a href = "/photos/{{$photo->id}}">
            <img class="thumbnail" src= "/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
                alt="{{$photo->title}}">   
            </a>
        
        <h4>{{$photo->title}}</h4>
        </div>
    @endforeach</div>
    
</div>    
</div>
@else
<p class="text-center">No photos to display</p>
@endif

@endsection