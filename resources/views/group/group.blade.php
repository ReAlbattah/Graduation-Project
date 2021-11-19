@extends('layouts.app')

@section('content')
@include('layouts.sideBar')

    <div class="container text-center">
        <div class="modal-dialog " role="document">
            <div role="document">
                <div class="modal-content">
                    
                    @if (Auth::user() && Auth::user()->role_id == 3 && Auth::user()->student_group == null)
                        <form action="/supervisor/create_groups" method="post">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create a group</h5>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Supervisor Name</label>
                                <select class="form-control" name="supervisor_id">

                                    @foreach ($supervisors as $supervisor)
                                        <option value="{{ $supervisor->id }}"> {{ $supervisor->name }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="usr"> Student ID:</label>
                                    <input class="col-sm-10" type="text" name="student[]">
                                    <label for="usr"> Student ID:</label>
                                    <input class="col-sm-10" type="text" name="student[]">
                                    <label for="usr"> Student ID:</label>
                                    <input class="col-sm-10" type="text" name="student[]">
                                    <label for="usr"> Student ID:</label>
                                    <input class="col-sm-10" type="text" name="student[]">
                                    <label for="usr"> Student ID:</label>
                                    <input class="col-sm-10" type="text" name="student[]">
                                    <label for="usr"> Student ID:</label>
                                    <input class="col-sm-10" type="text" name="student[]">
                                </div>
                            </div>

                            <div class="container text-center">
                                <button type="submit" class="btn btn-primary col-8">submit</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
