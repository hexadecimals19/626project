<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function method()
    {
        return view('loginmethod');
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Ensure this points to your login view
    }

    public function login(Request $request)
{
    $request->validate([
        'custemail' => 'required|email',
        'custpassword' => 'required|string',
    ]);

    $credentials = [
        'custemail' => $request->custemail,
        'password' => $request->custpassword,
    ];

    Log::info('Attempting login with credentials:', $credentials);

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $user = Auth::user();

        if ($user->usertype === 'admin') {
            Log::info('Admin login successful for email: ' . $request->custemail);
            $request->session()->regenerate();
            return redirect()->route('dashboard'); // Assuming the route name for the dashboard is 'dashboard'
        }

        Log::info('Login successful for email: ' . $request->custemail);
        $request->session()->regenerate();
        return redirect()->intended(route('home'));
    }

    Log::warning('Login failed for email: ' . $request->custemail);

    throw ValidationException::withMessages([
        'custemail' => [trans('auth.failed')],
    ]);
}




    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
