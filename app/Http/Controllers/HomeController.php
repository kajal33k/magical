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
    public function home2(){
      return view('front.landing');
    }


    public function privacy(){
        return view('front.privacy');
      }

}
