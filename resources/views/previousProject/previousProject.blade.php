@extends('layouts.app')




@section('content')

   <div class="container mt-5">
      @if(Auth::user() && Auth::user()->role_id ==1 )
      <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#add-template-modal">
          Add Previous Project 
      </button>
      @endif 


   <table class="table">
      <thead>
        <tr>
          <th scope="col">Project Name</th>
          <th scope="col">year</th>
        </tr>
      </thead>
      <tbody>
   

      </tbody>
  </table>
</div>
@endsection 
