<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(Auth::user());
        return view('home');
    }

    public function getPrivacyPolicy(){
        return view('privacy_policy');
    }

    public function getTermsOfService(){
        return view('terms_of_service');
    }
}
