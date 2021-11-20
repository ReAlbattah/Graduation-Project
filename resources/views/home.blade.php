@extends('layouts.app')
@section('content')


@include('layouts.sideBar')


<div class="col-sm pt-5 mx-5 vh-100">
    @include('layouts.alertMessages')
    @if($role_id == 1)
        <p>admin: {{$data}}</p>
    
    
    
    @elseif($role_id == 2)
    
        <p>super: {{$group}}</p>
    
    
    @else
    
        <p>student</p>
    
    @endif
</div>


@endsection

@section('scripts')
    <script>
        $("#mySideBar .home").addClass("active-sidebar");
    </script>
@endsection