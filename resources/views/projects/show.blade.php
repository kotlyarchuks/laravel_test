@extends('layout') 
@section('content')
<h2 class="title">{{$project->title}}</h2>
<p class="content">
  {{$project->description}}
  <br>
  <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>
@endsection