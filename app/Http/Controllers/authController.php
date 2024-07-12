<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class authController extends Controller
{
    public function showLogin()
    {
        return view('user.page.login');
    }

    public function showRegister()
    {
        return view('user.page.register');
    }

    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            ['name' => $name, 'email' => $email, 'password' => $password] = $validatedData;

            DB::beginTransaction();

            try {
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                ]);

                DB::commit();

                if ($user) {
                    session()->flash('alert', [
                        'type' => 'success',
                        'title' => 'Registration Successful',
                        'message' => 'You are now registered!'
                    ]);
                    return redirect()->route('showLogin');
                } else {
                    session()->flash('alert', [
                        'type' => 'error',
                        'title' => 'Registration Failed',
                        'message' => 'Failed to register. Please try again.'
                    ]);
                    return back()->withInput();
                }
            } catch (\Exception $e) {
                DB::rollBack();
                session()->flash('alert', [
                    'type' => 'error',
                    'title' => 'Database Error',
                    'message' => 'Failed to register due to a database error: ' . $e->getMessage()
                ]);
                return back()->withInput();
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessages = $e->validator->errors()->all();
            $errorMessage = implode(' ', $errorMessages);

            session()->flash('alert', [
                'type' => 'error',
                'title' => 'Validation Error',
                'message' => $errorMessage
            ]);

            return back()->withErrors($e->validator->errors())->withInput();
        }
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
            session()->flash('alert', [
                'type' => 'success',
                'title' => 'Login Successful',
                'message' => 'Welcome back!'
            ]);
            return redirect()->route('landing');
        } else {
            session()->flash('alert', [
                'type' => 'error',
                'title' => 'Login Failed',
                'message' => 'The provided credentials do not match our records.'
            ]);
            return back()->withInput();
        }
    }
}
