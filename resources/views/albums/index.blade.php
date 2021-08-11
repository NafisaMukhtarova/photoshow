@extends('layouts.app')

@section('content')
<h1 class = "text-center">All albums<h1>

<div id="albums">
<div class = "grid-x text-center"  >
    
    
    
    @foreach($albums as $album)
        <div class = "cell large-4">
            <a href = "/albums/{{$album->id}}">
            <img class="thumbnail" src= "storage/album_covers/{{$album->cover_image}}">   
            </a>
        
        <h4>{{$album->name}}</h4>
        </div>
    @endforeach</div>
    
</div>
    
</div>

@endsection