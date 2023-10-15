<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('website.welcome');
    }

   public function about(){
       return view('website.about');
   }

   public function dashboard(){
       return view('website.contact');
   }
}
