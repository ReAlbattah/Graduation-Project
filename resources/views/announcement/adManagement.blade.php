@extends('layouts.app')

@section('content')

   <div class="container mt-5">
      
   <table class="table">
      <thead>
        <tr>
          <th scope="col">Company Name</th>
          <th scope="col">Job Name</th>
          <th scope="col">Location</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($announcements as $announcement)
            <tr>
                <td>{{$announcement->company_name}}</td>
                <td>{{$announcement->job_name}}</td>
                <td>{{$announcement->location}}</td>
                <td>{{$announcement->status}}</td>
 
                <td>
                    <div class="btn-group" role="group">
                        <a role="button" class="btn btn-outline-secondary btn-sm mr-1" href="/admin/AD_Management/{{$announcement->id}}"><i class="far fa-edit"></i></a>
                        <form action="/admin/AD_Management/{{$announcement->id}}" method="post">
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