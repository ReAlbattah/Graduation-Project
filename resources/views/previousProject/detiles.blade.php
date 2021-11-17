@extends('layouts.app')


@section('content')

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
                        @foreach ($group->students as $student)
                              {{$student->name}} -
                        @endforeach
            </td>
            </td>
            <td>{{$supervisor = $project->group->supervised_by ->name}}</td>
            <td>{{$project->year}}</td>
            <td>{{$project->file}}</td>
            <td>{{$project->project_desc}}</td>
            
        </tr>

      </tbody>
  </table>
@endsection 