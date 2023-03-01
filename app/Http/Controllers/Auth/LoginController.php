<?php

namespace App\Http\Controllers\Auth;

use auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('authentication\login');
    }

      // login user
    public function authUser(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            //$request->session()->regenerate();

            
            return view('main')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');


         // return redirect('/')->with('message', 'You have been logged out!');
        }


      
       // return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    

      // Logout User
      public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out!');

    }


}
