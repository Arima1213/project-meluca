<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingAdminController extends Controller
{
    public function index()
    {
        return view('admin.page.landingPage');
    }
    public function produk()
    {
        return view('admin.page.produk');
    }
}
