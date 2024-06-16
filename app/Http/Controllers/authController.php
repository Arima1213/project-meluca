<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\info;
use Illuminate\Support\Facades\Auth;


class authController extends Controller
{
    public function showLogin()
    {
        return view('page.login');
    }

    public function showRegister()
    {
        return view('page.register');
    }

    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Destructure validated data for cleaner usage
            ['name' => $name, 'email' => $email, 'password' => $password] = $validatedData;

            try {
                // Create a new user record
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                ]);

                if ($user) {
                    // Display success message using SweetAlert2
                    info('Registration Successful', 'You are now registered!');
                    return redirect()->route('login')->with('success', 'Registration successful. You can now login.');
                } else {
                    // Display error message using SweetAlert2
                    info('Registration Failed', 'Failed to register. Please try again.');
                    return back()->withErrors(['error' => 'Registration failed. Please try again.'])->withInput();
                }

                // Redirect or return response
            } catch (\Exception $e) {
                // Handle any exceptions that occur during user creation
                info('Registration Failed', 'Failed to register. Please try again.');
                return back()->withErrors(['error' => 'Registration failed. Please try again.'])->withInput();
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        }
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Authentication successful, redirect to intended page or dashboard
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed, redirect back with error message
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput();
        }
    }
}
