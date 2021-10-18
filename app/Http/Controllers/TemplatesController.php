<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplatesController extends Controller
{
    

    public function view_templates() {
        $templates = Template::all();
        return view('templates.templates', compact('templates'));
    }
}
