<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role_id = Auth::user()->role_id;

        if($role_id == 1) {
            $data = 'the data';
            return view('home', compact('role_id', 'data'));
        } else if($role_id == 2) {
            $group = 'the group';
            return view('home', compact('role_id', 'group'));
        } else {
            return view('home', compact('role_id'));
        }
        
    }
}
