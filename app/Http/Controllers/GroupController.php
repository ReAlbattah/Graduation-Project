<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    
    public function view_group(){
        // get the supervisors from the database

        // pass the supervisors to the view

        return view('group.group');
    }

    public function create_group(Request $request) {
        // create group (supervisor_id) 
        // $group = create the group

        // $group->id

        // update users with the id numbers and add the group_id to them

    }
}
