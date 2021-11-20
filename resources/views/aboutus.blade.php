@extends('layouts.app')

@section('content')
@include('layouts.sideBar')

<div class="container">
  <h3>Graduation Project Management Platform</h3>
  <p>This platform is a graduation project for the students students of the Computer Science Department at the College of Science and Art in Unaizah - Qassim University.
The idea of this platform is to manage graduation projects from A to Z </p>
</div>

@endsection 

@section('scripts')
    <script>
        $("#mySideBar .aboutus").addClass("active-sidebar");
    </script>
@endsection