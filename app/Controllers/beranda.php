<?php

namespace App\Controllers;

class beranda extends BaseController
{
    public function index()
    {
        return view('beranda/home');
    }

    public function about()
    {
        return view('beranda/about');
    }

    public function contact()
    {
        return view('beranda/contact');
    }

    public function login()
    {   
        
        return view('beranda/login');
        
        
    }
    public function dashboard()
    {   
        $data['title'] = 'Welcome';
        return view('beranda/dashboard', $data);
        
        
    }
    public function register()
    {   
        $data['title'] = 'Register';
        return view('account/register', $data);
        
        
    }
    
}
