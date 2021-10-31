@extends('layouts.app')

@section('content')

   <div class="container mt-5">
      
   <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a role="button" class="btn btn-outline-secondary btn-sm mr-1" href="/admin/users_management/{{$user->id}}"><i class="far fa-edit"></i></a>
                        <form action="/admin/users_management/{{$user->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="#" onclick="return confirmDelete()" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
          @endforeach  
      </tbody>
  </table>
</div>
@endsection 


@section('scripts')
    <script>
        function confirmDelete() {
            if (confirm("Are you sure want to delete?")) {
                return true;
            }
            return false;
        }
    </script>
@endsection
