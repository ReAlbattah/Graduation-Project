@extends('layouts.app')
@section('content')

@include('layouts.sideBar')
    @php
        $student_group = Auth::user()->student_group;
        $project = null;
        if($student_group != null) {
            $project = Auth::user()->student_group->project;
        }
        $supervisor_name = '';
        if (
            Auth::user()
                ->student_group()
                ->exists()
        ) {
            $supervisor_name = Auth::user()->student_group->supervised_by->name;
        }
    @endphp
    <div class="col-sm mt-5 mx-5">
        @include('layouts.alertMessages')
        <h4>
            @if($project == null)
                Upload Your Project
            @else
                Your Project Information
            @endif
        </h4> 
        <form @if($project == null) action="/supervisor/create_project" method="post" enctype="multipart/form-data" @endif>
            @csrf
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-sm p-0 mr-1">
                        <div class="form-group">
                            <label>Supervisor Name:</label>
                            <input type="text" class="form-control" value="{{ $supervisor_name }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm p-0 ml-1">
                        <div class="form-group">
                            <label>Student Id:</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->id_number }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Project Title:</label>
                <input type="text" class="form-control" @if($project == null) name="project_title" value="{{old('project_title')}}" @else readonly value="{{$project->project_title}}" @endif>
            </div>
            <div class="form-group">
                <label>year: </label>
                <input type="number" class="form-control" min="2020" max="2030" step="1" @if($project == null) name="year" @else readonly value="{{$project->year}}" @endif/>
            </div>
            <div class="form-group">
                <label> Description: </label>
                <textarea class="form-control" @if($project == null) name="project_desc" @else readonly @endif>@if($project != null){{$project->project_desc}}@endif</textarea>
            </div>
            @if($project == null)
            <div class="form-group">
                    <label>File:</label>
                    <input type="file" class="form-control-file" name="file">
            </div>
            @else
                <a class="btn btn-success mx-1" type="button" href="/project/download/{{$project->id}}">Download Project File</a>
            @endif
                @if($project == null)
                <div class="form-group row justify-content-end">
                    <div class="col-sm-3 text-right">
                        <button type="reset" class="btn btn-secondary"><i class="fas fa-backspace"></i> Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
                    </div>
                </div>
            @endif
        </form>
    </div>

@endsection

@section('scripts')
    <script>
        $("#mySideBar .projects").addClass("active-sidebar");
    </script>
@endsection


