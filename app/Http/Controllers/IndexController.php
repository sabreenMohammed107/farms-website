<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Home_page;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Tag;
use App\Models\Website_job;
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
        $homedata=Home_page::firstOrFail();
        $about=About_us::firstOrFail();
        return view('about', get_defined_vars());
    }
      public function products(){
        $categories=Category::get();
        return view('products', get_defined_vars());
    }
public function singleProduct($id){
    $product=Product::where('id','=',$id)->first();
    $galleries=Product_image::where('product_id','=',$id)->get();
    $tags=Tag::where('type',1)->get();
    $otherProducts=Product::where('id','!=',$id)->get();
    return view('single-product', get_defined_vars());
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
        $jobs=Website_job::get();
        return view('jobs', get_defined_vars());
    }

}
