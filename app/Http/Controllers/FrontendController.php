<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function saved() {
      return view('frontend.saved');
   }


   // public function section() {
   //    return view('frontend.section');
   // }


   public function post() {
      return view('frontend.post');
   }


   public function currentnews() {
      return view('frontend.current_news');
   }


   public function tech() {
      return view('frontend.tech');
   }

   public function sport() {
      return view('frontend.sport');
   }

   public function entertiatment() {
      return view('frontend.entertianment');
   }

   public function life_social() {
      return view('frontend.life_social');
   }
}