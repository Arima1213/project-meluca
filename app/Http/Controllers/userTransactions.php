<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userTransactions extends Controller
{
    public function index()
    {
        return view('user.page.transactions');
    }
}