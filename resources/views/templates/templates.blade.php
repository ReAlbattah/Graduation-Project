@extends('layouts.app')

@section('content')
    @foreach ($templates as $template)
        {{$template->name}}
    @endforeach
    <div class="container text-center">
     <div class="input-group mb-3">
        <div class="input-group-prepend">
            <p>
            templat 
            </p>
        </div> 
        
            <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> Select <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">temp1</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">temp2</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">temp3</a></li>
    </ul>
  </div>
        </div>
    </div>
</div>
@endsection 
