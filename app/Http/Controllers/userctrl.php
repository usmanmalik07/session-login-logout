<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogins;
use Illuminate\Support\Facades\DB;

class userctrl extends Controller
{
    public function index()
    {
        return
            view('login');
    }
    function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $email = request('email');
            $password = request('password');
            $user = userlogins::where('email', $email)->where('password', $password)->get();
            if (count($user) > 0) {


                $request->session()->put('user_email', $user[0]->email);
                //dd(session()->all());

                return redirect('/dashboard');
            } else {
                return view('login');
            }
        } else return view('login');
    }

    public function viewdashboard()
    {
        if (session()->has('user_email')) {
            return        view('dashboard');
        } else {

            return redirect('login');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }

    }
