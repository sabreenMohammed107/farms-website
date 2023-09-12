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
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class IndexController extends Controller
{
    //
    public function index(){
        $homedata=Home_page::firstOrFail();
        $about=About_us::firstOrFail();
        $customers=Customer::get();
        $products=Product::inRandomOrder()->take(10)->get();
        $news=Website_new::orderBy('created_at', 'desc')->take(6)->get();
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

    try {
        $product=Product::where('id','=',$id)->firstOrFail();
    $galleries=Product_image::where('product_id','=',$id)->get();
    $tags=Tag::where('type','=','1')->get();
    $otherProducts=Product::where('id','!=',$id)->inRandomOrder()->take(10)->get();
    return view('single-product', get_defined_vars());
    } catch (ModelNotFoundException $e) {

        return redirect('/products');
    }
}

public function singleNews($id){

    try {
        $row=Website_new::where('id','=',$id)->firstOrFail();

        $tags=Tag::where('type','!=','1')->get();
        $otherNews=Website_new::where('id','!=',$id)->take(6)->orderBy("created_at", "desc")->get();
        return view('single-news', get_defined_vars());
    } catch (ModelNotFoundException $e) {
        // $redirect_available = SettingRedirect::where('deleted_link', Request::url())->first();
        // if ($redirect_available)
        //     return redirect($redirect_available->redirect_link);

        // throw $e;
        return redirect('/news');
    }




}
    public function contact(){
        return view('contact', get_defined_vars());
    }
    public function services(){

        return view('services', get_defined_vars());
    }
      public function news(){
        $rows=Website_new::orderBy("start_date", "desc")->get();
        return view('news', get_defined_vars());
    }

    public function jobs(){
        $jobs=Website_job::orderBy("start_date", "desc")->get();
        return view('jobs', get_defined_vars());
    }

}
