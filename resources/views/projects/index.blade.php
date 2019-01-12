@extends('layout') 
@section('content')
<h2 class="title has-text-centered">My Projects</h2>
<div class="columns is-multiline">
  @foreach($projects as $project)
  <div class="column is-one-third">
    <article class="message">
      <div class="message-header has-text-centered">
        <a href="/projects/{{$project->id}}/edit" class="card__header__link">
          <p>{{$project->title}}</p>
        </a>
        <form action="/projects/{{$project->id}}" method="POST">
          @method('delete') @csrf
          <button type="submit" class="delete" aria-label="delete"></button>
        </form>
      </div>
      <div class="message-body">
        <p>
          {{ $project->description }}
        </p>
        <br> @if($project->tasks()->count()) @foreach ($project->tasks as $task)
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
      </div>
    </article>
  </div>
  @endforeach
  <div class="column">
    <a href="/projects/create" class="card__header__link">
      <article class="message new-article">
        <div class="message-header">
          <p>Add new Project</p>
        </div>
        <div class="message-body has-text-centered">
          <span class="big-plus">+</span>
        </div>
      </article>
    </a>
  </div>
  {{-- End columns --}}
</div>
<br>
@endsection