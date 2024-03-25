@extends('layouts.app')

@section('content')
<h2 class="text-center">New project</h2>
<div class="container">
    <form action="{{route("dashboard.projects.store")}}" method="POST">
        @csrf

              <label for="project_name">Project Name</label>
              <input id="project_name" type="text" class="form-control mb-3" name="project_name" required>
              <label for="description">Project's description</label>
              <textarea class="form-control mb-3" name="description" id="description" rows="3"></textarea>
              <label for="image">Image Path/URL</label>
              <input id="image" type="text" class="form-control mb-3" name="image">
              <label for="github_repo">Github Repository URL</label>
              <input id="github_repo" type="text" class="form-control mb-3" name="github_repo">
              <button type="submit" class="btn bg-success text-light">Save</button>
        </form>
</div>

@endsection
