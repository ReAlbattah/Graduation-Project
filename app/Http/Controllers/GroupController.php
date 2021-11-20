<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use Auth;
class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        // get the supervisors from the database
        $supervisors = User::where('role_id', 2)->get();
        // pass the supervisors to the view
        return view('group.create',  compact('supervisors'));
    }

    function list_groups(){
        // get the supervisors from the database
        $supervisors = User::where('role_id', 2)->get();
        $groups = Group::all();
        // pass the supervisors to the view
        return view('group.list',  compact('supervisors','groups'));
    }

    public function edit_group($id)
    {
        $group = Group::find($id);
        $supervisors = User::where('role_id', 2)->get();
        $members = User::where('group_id',$id)->get();
        return view('group.edit',  compact('supervisors','group','members'));
    }

    public function supervisor_groups(){
        // جيبي القروبات تبع المشرف
        $groups = Auth::user()->supervising_groups;        
        // ارسلي القروبات للفيو يعني return
        return view('group.displayGroups', compact('groups') );
    }

    public function store(Request $request ) {
        // create group (supervisor_id) 
       
        $group = Group::create($request->only(["supervisor_id","name","max_students"]));
        // $group = create the group
        // $group->id
        // update users with the id numbers and add the group_id to them "return"
        return redirect('admin/groups');
        
    }
    public function update($id ,Request $request ) {
        // create group (supervisor_id) 
       
        $group = Group::find($id);
        
        $group->name= $request->name;
        $group->supervisor_id= $request->supervisor_id;
        $group->max_students= $request->max_students;
        $group->save();

        
        return redirect('admin/groups');
    }
    public function delete($id)
    {
        $group = Group::find($id);
        User::where('group_id',$group->id)->update(['group_id'=>null ]);
        $group->delete();
        return redirect('admin/groups');
    }
    public function remove_member($id)
    {
        $user = User::find($id);
        $user->group_id = null;
        $user->save();

        return redirect()->back();
    }
}
