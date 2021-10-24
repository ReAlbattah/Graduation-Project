<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use Illuminate\Support\Facades\Storage;

class TemplatesController extends Controller
{
    

    public function index() {
        $templates = Template::all();
        return view('templates.index', compact('templates'));
    }

    public function store(Request $request) {

        $data = $request->only('name');
        
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $request->file('file')->storeAs('documents', $fileName, 'public');
        $data['file'] = $fileName;

        Template::create($data);


        return redirect('templates');
        
    }

    public function edit($id) {
        //return view to edit the template
    }

    public function update(Request $request, $id) {
        // get the template from the database

        // update the template
    }

    public function destroy($id) {
        // delete the template from the database
    }

    public function document_download($id) {
        $template = Template::find($id);
        return Storage::download('/public/documents/'.$template->file);
    }
}
