<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;


class AnnouncementController extends Controller
{
    public function view_announcement() {
        $announcements = Announcement::all();
        return view('announcement.adManagement', compact('announcements'));

    }

    public function create_announcement(Request $request) {
        //dd($request->all());
        $data=$request->all();
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $request->file('file')->storeAs('documents', $fileName, 'public');
        $data['file'] = $fileName;

        Announcement::create($data);

        return redirect('/home');
    }

    public function job_status($id) {
        $announcement = Announcement::find($id);
        return view('announcement.jobStatus', compact('announcement'));

    }

    public function document_download($id) {
        $announcement = Announcement::find($id);
        return Storage::download('/public/documents/'.$announcement->file);
    }

    public function update(Request $request, $id) {
        $announcement = Announcement::find($id);
        $announcement->update($request->all());
        return redirect('admin/AD_Management');
        
    }

    public function destroy($id) {
        $announcement = Announcement::find($id);
        $announcement->delete();
        return redirect('admin/AD_Management');
    }
}
