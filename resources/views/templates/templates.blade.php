@extends('layouts.app')

@section('content')
    @foreach ($templates as $template)
        {{$template->name}}
    @endforeach
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <p>
            templat 
            </p>
        </div> 
        <div class="dropdown">
            <a class="btn btn-wight dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Temp1</a>
            <a class="dropdown-item" href="#">Temp2</a>
            </div>
        </div>
    </div>
@endsection 
