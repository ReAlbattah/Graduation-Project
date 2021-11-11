@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                @if (Auth::user()->student_group != null && Auth::user()->student_group->project_id == null)
                <form action="/supervisor/create_project" method="post">
                    @csrf
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
                        <input type="text" class="form-control" name="project_title">
                    </div>

                    <div class="form-group">
                        <label for="user">year: </label>
                        <input type="number" class="form-control" min="2020" max="2099" step="1" name="year" />
                    </div>

                    <div class="form-group">
                        <label for="usr"> Description: </label>
                        <textarea class="form-control" name="project_desc"></textarea>
                    </div>

                    <input type="hidden" name="file" value="test" />

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
    </div>

@endsection
