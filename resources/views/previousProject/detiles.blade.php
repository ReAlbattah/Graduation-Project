@extends('layouts.app')


@section('content')
@include('layouts.sideBar')
<div class="col-sm vh-100">
  <div class="container mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Project Name</th>
          <th scope="col">Students Name</th>
          <th scope="col">Supervisor Name</th>
          <th scope="col">Year</th>
          <th scope="col">File</th>
          <th scope="col">Summry</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$project->project_title}}</td>
            <td>     
                <ul>
                  @foreach ($project->group->students as $student)
                    <li>{{$student->name}}</li>
                  @endforeach
                </ul>  
            </td>
            </td>
            <td>{{$supervisor = $project->group->supervised_by ->name}}</td>
            <td>{{$project->year}}</td>
            <td>{{$project->file}}</td>
            <td>{{$project->project_desc}}</td>
            
        </tr>

      </tbody>
    </table>
  </div>
</div>
@endsection 

@section('scripts')
    <script>
        $("#mySideBar .detiles").addClass("active-sidebar");
    </script>
@endsection