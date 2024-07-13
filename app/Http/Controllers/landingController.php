<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index()
    {
        return view('user.page.landingPage');
    }
    public function aboutus()
    {
        return view('user.page.aboutus');
    }
    public function team()
    {
        return view('user.page.team');
    }
    public function feedback()
    {
        return view('user.page.feedback');
    }
}
