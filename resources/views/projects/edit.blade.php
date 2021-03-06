@extends('layout') 
@section('content')
<div class="columns is-centered">
  <div class="column is-half">
    @include('errors')
    <h2 class="title">Edit project</h2>
    <form action="/projects/{{$project->id}}" method="POST">
      @method('patch') @csrf

      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input" name="title" type="text" placeholder="Project title" value="{{$project->title}}">
        </div>
      </div>

      <div class="field">
        <label class="label">Description:</label>
        <div class="control">
          <textarea class="textarea" name="description" placeholder="Project description">{{$project->description}}</textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" type="submit">Update</button>
        </div>
      </div>
    </form>

  </div>
</div>
@endsection