@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{$project->project_name}}</h1>
    @if ($project->image)
      <img class="img-fluid" src="{{asset('storage/'.$project->image)}}" alt="project's image">
    @endif
    <p>
        {{$project->description}}
    </p>
</div>

@endsection
