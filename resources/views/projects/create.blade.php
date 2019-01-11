@extends('layout') 
@section('content')
<div class="columns is-centered">
  <div class="column is-half">
    <h2 class="title">Create new project</h2>
    <form action="/projects" method="POST">
      @csrf

      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input" name="title" type="text" placeholder="Project title">
        </div>
      </div>

      <div class="field">
        <label class="label">Description:</label>
        <div class="control">
          <textarea class="textarea" name="description" placeholder="Project description"></textarea>
        </div>
      </div>

      <div class="control">
        <button class="button is-link" type="submit">Submit</button>
      </div>

    </form>
  </div>
</div>
@endsection