<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function aboutus() {
        return view('user.aboutus');
    }
    
    public function adoptform() {
        return view('user.adoptform');
    }
    
    public function adopt() {
        return view('user.adopt');
    }
    
    public function contact() {
        return view('user.contact');
    }
    
    public function donate() {
        return view('user.donate');
    }
    
    public function profileinfo() {
        return view('user.profileinfo');
    }
    
    public function donateform() {
        return view('user.donateform');
    }
    
}
