<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if(Auth::user()->status =='Unblocked'){

            if(Auth::user()->type =='Admin'){
               return view('admin.ahome');
            
            }
            else{
                return view('customer.chome');
            }
            }
            else{
                return view('auth.login');
            }
           
    }

}
