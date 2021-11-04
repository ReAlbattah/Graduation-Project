<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UsersManagementController extends Controller
{
    public function view_users_management() {
        $users = User::all();
        
        return view('usersManagement.usersManagement', compact('users'));
    
    }

    public function edit_user_page($id) {
        $user = User::find($id);
        $roles = Role::all();
        return view('usersManagement.editUserPage', compact('user', 'roles'));
    }


    public function update(Request $request, $id) {
        // get the user from the db
        $user = User::find($id);
        
        // update the user
        $user->update($request->all());

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->role_id = $request->role_id;
        // $user->save();
        
        // return the view
        return redirect('admin/users_management');
    }


    public function destroy($id) {
        // get the user from the db
        $user = User::find($id);

        // delete the user
        $user->delete();

        // return the view
        return redirect('admin/users_management');
    }
    
    

    
}


