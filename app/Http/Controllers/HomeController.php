<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.pages.index');
    }
    public function shop(){

        return view('frontend.pages.shop');
    }
    public function about(){

        return view('frontend.pages.about');
    }
    public function services(){

        return view('frontend.pages.services');
    }
    public function blog(){

        return view('frontend.pages.blog');
    }
    public function contact(){

        return view('frontend.pages.contact');
    }
    public function cart(){

        return view('frontend.pages.cart');
    }
    public function checkout(){

        return view('frontend.pages.checkout');
    }
    public function thankyou(){

        return view('frontend.pages.thankyou');
    }
}
