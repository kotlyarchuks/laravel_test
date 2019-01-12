@extends('layout') 
@section('content')
<h2 class="title">{{$project->title}}</h2>
<p class="content">
  {{$project->description}}
  <br>
  <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>
@if($project->tasks()->count())
<ol>
  @foreach ($project->tasks as $task)
  <li>{{$task->description}}</li>
  @endforeach
</ol>
@endif
@endsection