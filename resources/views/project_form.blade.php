@extends('layouts.app')

@section('content')

<style>
  div {text-align:center;}

</style>
<div class="container">

<div class="row justify-content-center">
<div class="col-md-8">
  <br>
<br>
<br>
<div class="card">

<div class="card-header">
project
</div>
<div class="card-body">
<form action="{{ route('students.store') }}" method="POST">
     @csrf
<div class="p-2 mb-6"  >
          <div class="row">
              
          <!--<div class="col-sm-12"><h1 class="text-center text-secondary">إستعراض الطلب</h1>-->
    
  <div class="input-group mb-3">
<div class="input-group-prepend">

  <span class="input-group-text" id="basic-addon2" for="subject_pr" >Subject Of Project</span>
</div> 
<input class="form-control"  aria-label="subject_pr" aria-describedby="basic-addon4" type="text" name="subject_pr" >
</div>
  
<div class="input-group mb-3">
<div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon2" for="term_Gr" >Project idea</span>
</div> 
<input class="form-control"  aria-label="term_Gr" aria-describedby="basic-addon4" type="text" name="term_Gr" >
</div>
</div>
<div class="input-group mb-3">
<div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon2" for="idea_pr" >Graduation term</span>
</div> 
<input class="form-control"  aria-label="idea_pr" aria-describedby="basic-addon4" type="text" name="idea_pr" >
</div>
<div align="center">
      <button  class="btn btn-secondary" type="submit" >Submit the project </button>
      </div>
  </div>
  </form>

  </div>    </div>
  </div>
  </div>

@endsection