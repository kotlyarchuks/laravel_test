@extends('layout') 
@section('content')
<h2 class="title">{{$project->title}}</h2>
<p class="content">
  {{$project->description}}
</p>
<br>
<a href="/projects/{{$project->id}}/edit">Edit</a>
@endsection