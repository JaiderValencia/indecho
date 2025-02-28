<?php

namespace App\Http\Controllers;

class adminPagesController extends Controller
{
    //
    public function homeView()
    {
        return view('pages.admin.home');
    }
}
