@extends('layout')

@section('content')
  <h2>Projects</h2>
  <ul>
    @foreach($projects as $project)
  <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
    @endforeach
  </ul>
  <br>
  <a href="/projects/create">Create new</a>
@endsection