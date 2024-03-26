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

              <label for="website">Website URL</label>
              <input required id="website" type="text" class="form-control mb-3 @error("website") is-invalid  @enderror" name="website" value={{old('website')}} >
              @error('website')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <button type="submit" class="btn bg-success text-light">Save</button>
        </form>
</div>

@endsection
