<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use App\Models\Customer;
use App\Models\Home_page;
use App\Models\Product;
use App\Models\Website_new;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $homedata=Home_page::firstOrFail();
        $about=About_us::firstOrFail();
        $customers=Customer::get();
        $products=Product::get();
        $news=Website_new::get();
        return view('index', get_defined_vars());
    }
    public function about(){
        return view('about', get_defined_vars());
    }
      public function products(){
        return view('products', get_defined_vars());
    }

    public function contact(){
        return view('contact', get_defined_vars());
    }
    public function services(){
        return view('services', get_defined_vars());
    }
      public function news(){
        return view('news', get_defined_vars());
    }

    public function jobs(){
        return view('jobs', get_defined_vars());
    }

}
