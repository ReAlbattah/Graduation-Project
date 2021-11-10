<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supervised_by()
    {
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(User::class);
    }


    public function the_function() {
        // get the supervisor of the group
        $group = Group::find(1);
        $group->supervised_by; // will return the supervisor of this group

        // get the groups of the supervisor
        $group = Group::find(1);
        $group->students; // will return an array with all the students of this grop
        
    }


    public function project()
    {
        return $this->hasOne(Project::class);
    }

}
