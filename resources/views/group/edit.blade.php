@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
<div class="container text-center">
    <div class="modal-dialog " role="document">
        <div role="document">
            <div class="modal-content px-4">

                <section class="py-3">
                    <div class="container text-md-center">
                    <h3> Edit group </h3>
                    </div>
                </section>
            
                <form id="edit-form" action="/admin/group/{{$group->id}}/update" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Group name</label>
                    <input type="text" id="name" name="name" value="{{$group->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="supervisor_id">Group supervisor</label>
                        <select class="form-control" name="supervisor_id">
                            @foreach ($supervisors as $supervisor)
                                <option value="{{ $supervisor->id }}" @if($supervisor->id == $group->supervisor_id) selected @endif> {{ $supervisor->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="max_students">Max Students</label>
                        <input type="number" id="max_students" name="max_students" max="10" value="{{$group->max_students}}" class="form-control" required>
                    </div>
                </form>
                    @if($members->count()==0)
                    there are no students in this group.   
                    @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                            <form id="delete-form-{{$member->id}}" method="POST" action="/admin/user/{{$member->id}}/remove">
                                @csrf
                                {{ method_field('DELETE') }}

                            </form>    
                            <tr>
                                
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$member->id_number}}</td>
                                <td>{{$member->name}}</td>
                                <td>
                                    <a class="btn btn-outline-danger remove-user" onclick="
                                        var res = confirm('Are you sure?');
                                        if(res){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$member->id}}').submit();
                                        }">
                                        Remove <i class="bi bi-eraser"></i>
                                    </a>
                                    
                                </td>
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    @endif
                    <div class="container py-3">
                        <button onclick="document.getElementById('edit-form').submit();" type="submit" class="btn btn-info">Edit</button>
                    </div>
                </section>
            
            </div>
        </div>
    </div>
</div>

<script>
    $('.delete-user').click(function(e){
        e.preventDefault()
        if(confirm('Are you sure?')) {
            $(e.target).closest('form').submit()
        }
    });
</script>
@endsection
