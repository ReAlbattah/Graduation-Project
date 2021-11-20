<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Group;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class PopulateUsursAndGroupsAndProjectsInTheDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        for ($i=1; $i <= 9; $i++) { 
            User::create([
                'name' => 'supervisor '.$i,
                'email' => 'sup'.$i.'@gmail.com',
                'password' => Hash::make('123456789'),
                'role_id' => 2,
                'id_number' => $i.$i.$i.$i,
            ]);
        }

        for ($i=1; $i <= 20; $i++) { 
            User::create([
                'name' => 'student '.$i,
                'email' => 'student'.$i.'@gmail.com',
                'password' => Hash::make('123456789'),
                'role_id' => 3,
                'id_number' => '000'.$i,
            ]);
        }
        
        for ($i=2; $i <= 4; $i++) { 
            $group = Group::create([
                'supervisor_id' => $i,
            ]);
            $project = Project::create([
                'group_id' => $group->id,
                'project_title' => 'project '.$i,
                'project_desc' => 'project desc '.$i,
                'year' => '2020',
                'file' => 'test',
            ]);
            $group->update(['project_id'=>$project->id]);
            $id_number = '000'.$i;
            $user = User::where('id_number', $id_number )->first();
            $user->update(['group_id'=>$group->id]);


        } 
    }

   
}
