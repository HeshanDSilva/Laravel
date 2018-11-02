<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getHome(){
    	return view('Home');
    }

     public function getAbout(){
    	return view('About');
    }

     public function getContact(){
    	return view('Contact');
    }
}
