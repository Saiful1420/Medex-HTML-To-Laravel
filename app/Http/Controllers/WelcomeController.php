<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	return view('frontEnd.home.homeContent');
    }
    public function about(){
    	return view('frontEnd.home.about');
    }

    public function service(){
    	return view('frontEnd.home.service');
    }

    public function doctor(){
    	return view('frontEnd.home.doctor');
    }

     public function department(){
    	return view('frontEnd.home.department');
    }

    public function pricing(){
    	return view('frontEnd.home.pricing');
    }

    public function gallery(){
    	return view('frontEnd.home.gallery');
    }

    public function blog(){
    	return view('frontEnd.home.blog');
    }

    public function contact(){
    	return view('frontEnd.home.contact');
    }

     public function single_blog(){
    	return view('frontEnd.home.single_blog');
    }
}


