<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function login(Request $request)
    {
        // Validate the login request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('main');
            } else {
                return redirect('/main'); // Handle cases where user role is not defined
            }
         }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function showAdmin()
    {
        return view('admin'); // Assuming 'admin' is the blade view for admin dashboard
    }

    public function showMain()
    {
        return view('main'); // Assuming 'main' is the blade view for user dashboard
    }

    public function showWelcomePage()
    {
        return view('welcome'); // welcome page redirection
    }

    public function getUserCount(): JsonResponse {
        try {
            $userCount = User::count();
            return response()->json(['userCount' => $userCount]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

}
