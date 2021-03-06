<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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

    
     
     
    public function index(){
        
        return view('admin.index');
    }
    
    public function userProfile(){
        return view('admin.users.profile');
    }
}
