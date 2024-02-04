<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MyAuth extends Controller
{
    function login_view(){
        return view('login');
    }

    function login_process(Request $req){

    }

    function logout_process(){

    }

    function register_view(){
        return view('register');
    }

    function register_process(Request $req){
        $data=$req->all();

        User::create($data);

        return Redirect::to('login');
    }
}
