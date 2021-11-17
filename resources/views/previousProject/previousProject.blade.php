@extends('layouts.app')
@section('content')

@include('layouts.sideBar')
<div class="col-sm-10 vh-100">
  <div class="container mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Project Name</th>
          <th scope="col">year</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
        <tr>
            <td><a href="/project_detiles/{{$project->id}}">{{$project->project_title}}</a></td>
            <td>{{$project->year}}</td>
        </tr>
      @endforeach  

      </tbody>
    </table>
  </div>
</div>
   
@endsection 

@section('scripts')
    <script>
        $("#mySideBar .previousProjects").addClass("active-sidebar");
    </script>
@endsection
