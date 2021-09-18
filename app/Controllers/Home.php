<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view ('home');
    }
  
    public function userlogin()
    {
        return view('userlogin');
    }

    public function about()
    {
        return view('about');
    }
    public function typography()
    {
        return view('typography');
    }
    public function contacts()
    {
        return view('contacts');
    }
  
    }
   
    
    
