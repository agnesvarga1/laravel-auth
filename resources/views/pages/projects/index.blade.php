@extends('layouts.app')

@section('content')
<h2 class="text-center my-2">Project List</h2>
<div class="container">
    <a class="btn btn-success my-2 " href="{{route("dashboard.projects.create")}}">Add Project</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Project Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Github repository URL</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->project_name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->github_repo}}</td>

              </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
