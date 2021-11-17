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

    public function view_group(){
        // get the supervisors from the database
        $supervisors = User::where('role_id', 2)->get();
        // pass the supervisors to the view
        return view('group.group',  compact('supervisors'));
    }

    public function supervisor_groups(){
        // جيبي القروبات تبع المشرف
        $groups = Auth::user()->supervising_groups;        
        // ارسلي القروبات للفيو يعني return
        return view('group.displayGroups', compact('groups') );
    }

    public function create_group(Request $request ) {
        // create group (supervisor_id) 
        //dd($request->all() );
        $group = Group::create($request->only("supervisor_id"));
        // $group = create the group
        // $group->id
        foreach ($request->student as  $value) {
            $student = User::where('role_id', 3)->where('id_number', $value )->first();
            if ($student != null){
                $student->update(['group_id' => $group->id]); 
            }
        }
        // update users with the id numbers and add the group_id to them "return"
        return redirect('/home');
        
    }
}
