@extends('layouts.app')

@section('content')
    @foreach ($templates as $template)
        {{$template->name}}
    @endforeach
@endsection
