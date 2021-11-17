@extends('layouts.app')




@section('content')
    <div class="container mt-5">
    <h3>Edit user</h3>

    <form action="/admin/users_management/{{$user->id}}" method="post">
        @method('put')
        @csrf 
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label>ID Number</label>
            <input type="text" class="form-control" name="id_number" value="{{$user->id_number}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role_id">
              
              @foreach ($roles as $role)
                <option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->name}}</option>    
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
   
    </div>
@endsection 
