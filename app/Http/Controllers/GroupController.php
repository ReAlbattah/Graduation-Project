<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    
    public function view_group(){
        return view('group.group');
    }
}
