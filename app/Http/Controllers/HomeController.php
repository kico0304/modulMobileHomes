<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $lang = Lang::locale();

//        $products = Product::with('images')->with('product_parts')->with('names')->with('texts')->get();

        $products = Product::with(['images', 'product_parts', 'names' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'texts' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }])->get();

        return view('home', [
            'products' => $products
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about(){
        return view('about');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(){
        return view('contact');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function investors(){
        return view('investors');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function technology()
    {
        return view('technology');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function actualities()
    {
        return view('actualities');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singlearticle()
    {
        return view('singlearticle');
    }

    public function products(){

        $lang = Lang::locale();

        $products = Product::with(['images', 'product_parts', 'names' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'texts' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }])->get();

        return view('products', [
            'products' => $products
        ]);
    }

    public function product(Request $request){

        $id = $request['id'];
        $lang = Lang::locale();

        $product = Product::with(['images', 'product_parts', 'names' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'texts' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }])->where('id', $id)->get();

        return view('product', [
            'products' => $product
        ]);
    }


}
