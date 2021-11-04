@extends('layouts.app')


@section('content')

   <div class="container mt-5">
      
   <table class="table">
      <thead>
        <tr>
          <th scope="col">Project Name</th>
          <th scope="col">Students Name</th>
          <th scope="col">Supervisor Name</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($projects as $project)
              <tr> 
                <td>{{$project->projectTitle}}</td>
                <td>{{$project->group_id}}</td>
                <td>{{$project->group_id}}</td>
                <td>{{$project->projectDesc}}</td>
              </tr>
            @endforeach  

      </tbody>
  </table>
</div>
@endsection 
