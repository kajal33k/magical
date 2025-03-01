<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Models\OrderRequest;
use App\Models\Appointment;
use App\Models\Lead;

class AuthController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return redirect()->route('auth.dashboard');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|integer',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);

        return $user ? redirect()->route('login-form')->with('success', 'Successfully registered.')
                     : back()->with('error', 'Registration failed.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'), true)) {
            return redirect()->route('auth.dashboard');
        }
        return back()->with('error', 'Email or password does not match.');
    }

    public function dashboard()
    {
        return view('auth.dashboard', [
            'totalOrders' => OrderRequest::count(),
            'todayOrders' => OrderRequest::whereDate('created_at', today())->count(),
            'appointment' => Appointment::count(),
            'totalContacts' => Lead::count()
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-form');
    }

    public function forget()
    {
        return view('auth.forget');
    }

    public function forget_pass(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Email does not exist.');
        }

        $token = Str::random(40);
        $url = URL::to('/reset-password?token=' . $token);
        $data = ['url' => $url, 'email' => $request->email, 'title' => 'Password Reset'];

        Mail::to($request->email)->send(new ResetPasswordMail($data));

        PasswordReset::updateOrCreate(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => Carbon::now()]
        );

        return back()->with('success', 'Password reset link has been sent to your email.');
    }

    public function reset_password(Request $request)
    {
        $resetData = PasswordReset::where('token', $request->token)->first();
        if (!$resetData || Carbon::parse($resetData->created_at)->addMinutes(60)->isPast()) {
            return redirect()->route('login-form')->with('error', 'Invalid or expired token.');
        }
        return view('auth.reset_passwordView', ['email' => $resetData->email]);
    }

    public function store_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        $user->update(['password' => Hash::make($request->password)]);
        PasswordReset::where('email', $user->email)->delete();

        return redirect()->route('login-form')->with('success', 'Your password has been reset successfully.');
    }
}
