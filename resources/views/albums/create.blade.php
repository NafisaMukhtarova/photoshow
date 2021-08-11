@extends('layouts.app')

@section('content')
<h1 class = "text-center">Create Album<h1>

<div class = "grid-container text-center">
    <div class = "cell">
{!!Form::open(['action' => 'App\Http\Controllers\AlbumsController@store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder'=> 'Album Name'])}}
    {{Form::textarea('description','',['placeholder'=> 'Album Description '])}}
    {{Form::file('cover_image')}}
    {{Form::submit('submit')}}
{!!Form::close() !!}
</div>
</div>

@endsection