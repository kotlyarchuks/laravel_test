@extends('layout') 
@section('content')
<h2 class="title">{{$project->title}}</h2>
<p class="content">
  {{$project->description}}
  <br>
  <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>
@if($project->tasks()->count()) @foreach ($project->tasks as $task)
<div>
  <form action="/tasks/{{ $task->id }}" method="POST">
    @method('PATCH') @csrf
    <label class="checkbox {{ $task->completed ? " is-completed " : '' }}" for="completed">
        <input type="checkbox" name="completed" {{ $task->completed ? "checked" : '' }} onClick="this.form.submit()">
        {{$task->description}}
      </label>
  </form>
</div>
@endforeach @endif
@endsection