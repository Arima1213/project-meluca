<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class authAdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.page.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                session()->flash('alert', [
                    'type' => 'success',
                    'title' => 'Login Successful',
                    'message' => 'Welcome back!'
                ]);
                return redirect()->route('admin-landing');
            } else {
                Auth::logout();
                session()->flash('alert', [
                    'type' => 'error',
                    'title' => 'Access Denied',
                    'message' => 'You do not have permission to access this area.'
                ]);
                return back()->withInput();
            }
        } else {
            session()->flash('alert', [
                'type' => 'error',
                'title' => 'Login Failed',
                'message' => 'The provided credentials do not match our records.'
            ]);
            return back()->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Logout Successful',
            'message' => 'You have been logged out.'
        ]);
        return redirect()->route('admin-showLogin');
    }
}