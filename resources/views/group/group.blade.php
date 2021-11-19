@extends('layouts.app')

@section('content')
@include('layouts.sideBar')
    <div class="col-sm mt-5 mx-5">
        <h4>
            @if (Auth::user()->student_group == null)
                Join Your Group
            @else
                Your Group Information
            @endif
        </h4> 
        <form class="mt-4" @if(Auth::user()->student_group == null) action="/supervisor/create_groups" method="post" @endif>
            @csrf
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Supervisor Name</label>
                <div class="col-sm-10">
                    @if(Auth::user()->student_group == null)
                        <select class="form-control" name="supervisor_id">

                            @foreach ($supervisors as $supervisor)
                                <option value="{{ $supervisor->id }}"> {{ $supervisor->name }} </option>
                            @endforeach
                        </select>
                    @else
                        @php
                            $supervisor_name = '';
                            if (
                                Auth::user()
                                    ->student_group()
                                    ->exists()
                            ) {
                                $supervisor_name = Auth::user()->student_group->supervised_by->name;
                            }
                        @endphp
                        <input readonly type="text" class="form-control" value="{{$supervisor_name}}">
                    @endif
                </div>
            </div>
            @if(Auth::user()->student_group != null)
                <div class="form-group row">
                    <label for="students-names" class="col-sm-2 col-form-label">Group Students</label>
                    <div class="col-sm-10">
                        <div class="d-flex">
                            @foreach (Auth::user()->student_group->students as $student)
                                <h5><span class="badge badge-info text-white mr-2 mt-1 p-2">{{$student->name}}</span></h5>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if (Auth::user()->student_group == null)
                <div class="form-group row justify-content-end">
                    <div class="col-sm-3 text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            @endif
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        $("#mySideBar .groups").addClass("active-sidebar");
    </script>
@endsection
