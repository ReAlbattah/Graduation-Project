@extends('layouts.app')

@section('content')

<div class="container text-center">
  <div class="modal-dialog " role="document">
    <div  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create a group</h5>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Supervisor Name</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>


            <div class="modal-body">
                <div class="form-group">
                        <label for="usr"> Student ID:</label>
                        <input class="col-sm-10" type="text" id="usr">
                        <label for="usr"> Student ID:</label>
                        <input class="col-sm-10" type="text" id="usr">
                        <label for="usr"> Student ID:</label>
                        <input class="col-sm-10" type="text" id="usr">
                        <label for="usr"> Student ID:</label>
                        <input class="col-sm-10" type="text" id="usr">
                        <label for="usr"> Student ID:</label>
                        <input class="col-sm-10" type="text" id="usr">
                        <label for="usr"> Student ID:</label>
                        <input class="col-sm-10" type="text" id="usr">
                      </div>
                    </div>
           
                      <div class="container text-center" >
                <button type="button" class="btn btn-primary col-8">submit</button>
                </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection