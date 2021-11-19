@extends('layouts.app')

@section('content')
@include('layouts.sideBar')

<div class="container text-center">
    <div class="modal-dialog " role="document">
        <div role="document">
            <div class="modal-content">
                    <form action="/supervisor/display_groups" method="post">
                        @csrf
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Group</th>
                                <th scope="col">Students</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $key => $group)
                                <tr>
                                       <td> {{$key+1 }}</td>

                                       <td>
                                          @foreach ($group->students as $student)
                                                {{$student->name}} <br/>
                                          @endforeach
                                        </td>
                                </tr>
                              @endforeach  
                        
                            </tbody>
                        </table>

                    </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection





