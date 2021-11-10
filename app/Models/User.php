<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'id_number',
        'email',
        'password',
        'role_id',
        'group_id'
    ];
    public function students(){
        return $this->hasMany('App\Models\students');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function supervising_groups()
    {
        return $this->hasMany(Group::class, 'supervisor_id');
    }

    public function student_group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }


    public function the_function() {
        // get the groups of the supervisor
        $user = User::find(2);
        $user->supervising_groups;

        // get the group of the student
        $lina = User::find(3);
        $badr = User::find(4);
        // both will return the same group
        $lina->student_group;
        $badr->student_group;

    }
}
