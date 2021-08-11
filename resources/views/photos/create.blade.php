@extends('layouts.app')

@section('content')
<h1 class = "text-center">Upload photo<h1>

<div class = "grid-container text-center">
{!!Form::open(['action' => 'App\Http\Controllers\PhotosController@store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
    {{Form::text('title','',['placeholder'=> 'Photo title'])}}
    {{Form::textarea('description','',['placeholder'=> 'Photos Description '])}}
    {{Form::hidden('album_id',$album_id)}}
    {{Form::file('photo')}}
    {{Form::submit('submit')}}
{!!Form::close() !!}
</div>

@endsection