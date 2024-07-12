<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index()
    {
        return view('user.page.landingPage');
    }
    public function about()
    {
        return view('page.aboutus');
    }
}
