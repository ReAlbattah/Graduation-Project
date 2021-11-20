@extends('layouts.app')

@section('content')

<div class="container text-center">
    <div class="modal-dialog " role="document">
        <div role="document">
            <div class="modal-content px-4 py-4">

                <section class="py-3">

                    <div class="container text-md-center">
                    <h3> Create Group </h3>
                    </div>
                </section>
                <form action="/admin/create" method="post">
                            @csrf
                    <div class="form-group">
                        <label for="name">Group name</label>
                        <input type="text" id="name" name="name"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="supervisor_id">Group supervisor</label>
                        <select class="form-control" name="supervisor_id">
                            
                            @foreach ($supervisors as $supervisor)
                            <option value="{{ $supervisor->id }}"> {{ $supervisor->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="max_students">Max Students</label>
                        <input type="number" id="max_students" name="max_students" max="10" class="form-control" required>
                    </div>
                    <div class="container text-center">
                                <button type="submit" class="btn btn-primary col-8">Create</button>
                            </div>
                        </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
