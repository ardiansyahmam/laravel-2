<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
        public function register(){
            return view('register');
        }
    
        public function form(Request $request)
        {
            $depan = $request->nm_dpn;
            $belakang = $request->nm_blkg;
            //dd($depan,$belakang);

            return view('welcome', compact('depan','belakang'));
        }
}
