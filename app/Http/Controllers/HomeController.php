<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller

{
    public function index(){
        $doctor = Doctor::all();
        return view('users.home',compact('doctor'));
       }

       public function about(){
        return view('users.about');
       }



       public function reloadCaptcha(){
        return response()->json(['captcha'=>captcha_img()]);
    }


    public function redirect(){


        if (Auth::id()) {
            if (Auth::user()->usertype=='0') {
                $doctor = Doctor::all(); // Fetch all doctors from the database
                return view('users.home',compact('doctor'));
            }

            else {
                return view('admin.home');
            }

            // elseif (Auth::user()->usertype=='2') {
            //     return view('users.home');
            // }

        }
    }






}
