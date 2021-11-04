<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class previousProjectController extends Controller
{
    public function view_previousProject() {
        return view('previousProject.previousProject');

    }

    public function view_projectDetiles() {
        $projects = Project ::all();
        return view('previousProject.detiles');

    }
}
