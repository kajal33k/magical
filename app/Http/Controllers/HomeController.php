<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Plan;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('front.index');
      }
      
    public function landing(){
      return view('front.landing');
    }


    public function privacy(){
        return view('front.privacy');
      }

      public function term_condition(){
        return view('front.terms_condition');
      }
      public function refund(){
        return view('front.refund');
      }
      public function shipping(){
        return view('front.shipping');
      }
      public function return(){
        return view('front.return');
      }
}
