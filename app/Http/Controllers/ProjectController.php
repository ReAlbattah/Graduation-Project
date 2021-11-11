<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Group;
use Auth;


class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view_project() {
        
        return view('project.addProject');

    }


    public function create_project(Request $request) {
        //dd($request->all());
        // create project
        $data=$request->all();
        //dd($data);
        $data['group_id']= Auth::user()->group_id;
        $project= Project::create($data);
        $group= Group::find($data['group_id']);
        $group->update(['project_id' => $project->id]); 
        return redirect('/home');
    }

    public function view_previousProject() {
        $projects= Project::where('status', 'pass')->get();
        return view('previousProject.previousProject',  compact('projects'));

    }

    public function view_project_detiles($id) {
        $project = Project::find($id); 
        return view('previousProject.detiles', compact('project'));

    }


}
