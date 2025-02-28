<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicPagesController extends Controller
{
    //
    public function homeView()
    {
        return view('pages.public.home', ['active' => 'home']);
    }

    public function faqView()
    {
        return view('pages.public.faq', ['active' => 'faq']);
    }

    public function aboutView()
    {
        return view('pages.public.about', ['active' => 'about']);
    }

    public function contactView()
    {
        return view('pages.public.contact', ['active' => 'contact']);
    }
}
