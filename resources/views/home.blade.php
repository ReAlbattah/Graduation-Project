@extends('layouts.app')
@section('content')


@include('layouts.sideBar')


<div class="col-sm-10 vh-100">
    @if($role_id == 1)
        <p>admin: {{$data}}</p>
    
    
    
    @elseif($role_id == 2)
    
        <p>super: {{$group}}</p>
    
    
    @else
    
        <p>student</p>
    
    @endif
</div>


@endsection