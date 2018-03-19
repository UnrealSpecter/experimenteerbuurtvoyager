<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // get user input data
        $userdata = array('email' => Input::get('username'), 'password' => Input::get('password'));

        if(Auth::attempt($userdata)){
            return redirect('/doener/' . Auth::user()->id . '/edit');
        }
        else{
            return redirect()->back()->withErrors(['Ongeldige login']);
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
