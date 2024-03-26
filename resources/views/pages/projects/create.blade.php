@extends('layouts.app')

@section('content')
<h2 class="text-center">New project</h2>
<div class="container">
    <form action="{{route("dashboard.projects.store")}}" method="POST">
        @csrf

              <label for="project_name">Project Name</label>
              <input id="project_name" type="text" class="form-control mb-3 @error("project_name") is-invalid  @enderror" name="project_name" required   value={{old('project_name')}}>
                @error('project_name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              <label for="description">Project's description</label>
              <textarea class="form-control mb-3 @error("description") is-invalid  @enderror" name="description" id="description" rows="3">{{old('project_name')}}</textarea>
                @error('description')
               <div class="alert alert-danger">{{ $message }}</div>
               @enderror
              <label for="image">Image Path/URL</label>
              <input id="image" type="text" class="form-control mb-3 @error("image") is-invalid  @enderror" name="image" value={{old('project_name')}}>
              @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label for="github_repo">Github Repository URL</label>
              <input required id="github_repo" type="text" class="form-control mb-3 @error("github_repo") is-invalid  @enderror" name="github_repo" value={{old('project_name')}} >
              @error('github_repo')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <button type="submit" class="btn bg-success text-light">Save</button>
        </form>
</div>

@endsection
