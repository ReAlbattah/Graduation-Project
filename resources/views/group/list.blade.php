@extends('layouts.app')

@section('content')

    <div class="container text-center">

                <section class="bg-light text-dark  py-3">
                    <div class="container text-md-center">
                    <h3> Manage student </h3>
                    </div>
                </section>
            
            
                <section class="py-1">

                <div class="container  float-end py-4">
                <a href="/admin/create" class="btn btn-info">Create groups</a>
                </div>
                
                <div class="container py-3">
                    
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Group Name </th>
                        <th scope="col"> N.o. Students </th>
                        <th scope="col"> Supervisor </th>
                        <th scope="col"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $group_counter = 1 @endphp
                    @foreach($groups as $group)
                    <form id="delete-form-{{$group->id}}" method="POST" action="/admin/group/{{$group->id}}/delete">
                        @csrf
                        {{ method_field('DELETE') }}
                    </form>
                        <tr>
                            <th scope="row">{{$group_counter++}}</th>
                            {{-- <td> GROUP#{{$group->id}} </td> --}}
                            <td> {{$group->name }} </td>
                            <td> {{$group->students->count()}}/{{$group->max_students}} </td>
                            <td> {{$group->supervised_by->name}} </td>
                            <td>
                                <a href="group/{{$group->id}}/edit" class="btn btn-outline-info btn-sm"> Edit </a> 
                                {{-- <a href="group/{{$group->id}}/delete" class="btn btn-outline-danger btn-sm"> Delete </a> --}}
                                <a class="btn btn-outline-danger btn-sm" onclick="
                                        var res = confirm('Are you sure?');
                                        if(res){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$group->id}}').submit();
                                        }">
                                        Delete <i class="bi bi-trash"></i>
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </section>

    </div>
    </div>
    </div>
@endsection
