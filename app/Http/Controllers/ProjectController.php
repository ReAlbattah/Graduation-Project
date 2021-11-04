<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view_subForProposal() {
        return view('subscribeForProposal.subscribeForProposal');

    }


    public function create_project(Request $request) {
        // create project
    }


}
