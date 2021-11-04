@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#add-template-modal">
            Add Template
        </button>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($templates as $template)
                <tr>
                        <td>{{$template->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a role="button" class="btn btn-outline-secondary btn-sm mr-1" href="#"><i class="far fa-edit"></i></a>
                                <form action="/admin/templates/{{$template->id}}" method="post">
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
    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="add-template-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Template</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/admin/templates" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Template Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Template File</label>
                        <input type="file" class="form-control-file" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
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