<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authen;
use App\Http\Requests\StoreAuthenRequest;
use App\Http\Requests\UpdateAuthenRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AuthenController extends Controller
{
    public function loginForm()
    {
        return view('client.layout.login');
    }

    public function login()
    {


        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('trang-chu');

            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }

    public function registerForm()
    {
        return view('client.layout.register');
    }

    public function register()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::query()->create($data);
        Auth::login($user);
        request()->session()->regenerate();
        return redirect()->route('trang-chu');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotForm()
    {
        return view(' client.layout.forgotpasword');
    }

//    public function broker()
//    {
//        return Password::broker();
//    }
//    public function  seenEmailResetPass(Request $request){
//        $user = User::where('email', $request->email)->first();
//
//        if ($user) {
//            $this->broker()->sendResetLink($request->only('email'));
//
//            return back()->with('status', 'Reset password link sent to your email.');
//        } else {
//            return back()->withErrors(['email' => 'This email does not exist.']);
//        }
//    }


}
