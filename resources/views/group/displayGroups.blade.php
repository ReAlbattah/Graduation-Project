@extends('layouts.app')

@section('content')
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
                                        <tr>
                                            <td >  </td>
                                            <td>  </td>
                                        </tr>
                        
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





