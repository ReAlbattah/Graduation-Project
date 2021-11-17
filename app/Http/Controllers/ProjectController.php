<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Group;
use App\Models\User;
use Auth;


class ProjectController extends Controller
{
    public function add_project_page() {
        return view('project.addProject');

    }

    public function project_management(){
        $projects = Project::all();
        return view('project.projectManagement', compact('projects'));
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
        //$student = Group::where('role_id', 3);
        return view('previousProject.previousProject',  compact('projects'));

    }

    public function view_project_detiles($id) {
        $project = Project::find($id); 
        //$group = Group::all();
        return view('previousProject.detiles', compact('project'));

    }

    public function edit_project($id) {
        $project = Project::find($id);

        return view('project.editProject', compact('project'));
    }

    
    public function update(Request $request, $id) {
        $project = Project::find($id);
        $project->update($request->all());
        return redirect('admin/project_management');
    }


    public function destroy($id) {
        $project = Project::find($id);
        $project->delete();
        return redirect('admin/project_management');
    }
}
