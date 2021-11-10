@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Model for Subscribe</h5>
                </div>


                <div class="modal-body">
                    <div class="form-group">
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
                        <label for="usr">Supervisor Name:</label>
                        <input type="text" class="form-control" value="{{ $supervisor_name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="user">Student Id:</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->id_number }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user">Project Title:</label>
                    <input type="text" class="form-control" id="user">
                </div>

                <div class="form-group">
                    <label for="user">year: </label>
                    <input type="text" class="form-control" id="user">
                </div>

                <div class="form-group">
                    <label for="usr"> Description: </label>
                    <textarea class="form-control" id="user"></textarea>
                </div>
            </div>


            <div class="container text-center">
                <button type="button" class="btn btn-primary col-8">submit</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
