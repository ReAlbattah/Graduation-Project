<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view_advertisement_page() {

        return view('admin.home');

    }

    public function create_advertisement() {

        return redirect('/admin/home');

    }
}
