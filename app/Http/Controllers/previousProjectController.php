<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class previousProjectController extends Controller
{
    public function view_previousProject() {
        return view('previousProject.previousProject');

    }
}
