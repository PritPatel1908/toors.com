<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidation;
use App\Http\Requests\SignupValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LoginSignupController extends Controller
{
    public function signup(SignupValidation $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->pincode = $request->pincode;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->password = $request->password;
        $user->save();
        return redirect('Login')->with('success','User Sign Up Successfully....');
    }

    public function login(LoginValidation $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();

            $user = User::where('email', $request->email)->first();

            if ($user->role == 0) {
                return redirect()->intended('Admin/Dashboard');
            }
            else if ($user->role == 1) {
                $user->is_active = 1;
                $user->save();
                return redirect()->intended('/');
            }
            elseif ($user->role == 2) {
                return back()->with('error','Credentials not match.');
            }
            else
            {
                return back()->with('error','Credentials not match.');
            }
        }
        else
        {
            return back()->with('error','You Have Not User First.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function admin_logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
