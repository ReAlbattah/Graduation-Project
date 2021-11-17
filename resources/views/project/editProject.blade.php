@extends('layouts.app')

@section('content')
    <div class="container mt-5">
    <h3>Edit project</h3>

    <form action="/admin/project_management/{{$project->id}}" method="post">
        @method('put')
        @csrf 
        <div class="form-group">
            <label>Project Name</label>
            <input type="text" class="form-control" name="project_title" value="{{$project->project_title}}">
        </div>
        
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
              <option value="pass">Pass</option>
              <option value="fail">Fail</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
   
    </div>
@endsection 