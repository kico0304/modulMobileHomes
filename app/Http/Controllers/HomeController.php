<?php

namespace App\Http\Controllers;

use App\Actualitie;
use App\Language;
use App\OptionsForProduct;
use App\PartsForProduct;
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
    public function actualities(Request $request)
    {
        $lang = Lang::locale();
        $lang_id = Language::where('lang', $lang)->first()->id;

        $filter = $request->query('filter');

        if (!empty($filter)) {
            $actualities = Actualitie::with(['images'])->whereHas('actualities_lang', function ($q) use ($lang_id) {
                $q->where('language_id', $lang_id);
            })->where('name', 'like', '%'.$filter.'%')
                ->paginate(5);
        } else {
            $actualities = Actualitie::with(['images'])->whereHas('actualities_lang', function ($q) use ($lang_id) {
                $q->where('language_id', $lang_id);
            })->paginate(5);
        }

//        $actualities = Actualitie::with(['images'])->whereHas('actualities_lang', function ($q) use ($lang_id) {
//            $q->where('language_id', $lang_id);
//        })->get();

        return view('actualities', [
            'actualities' => $actualities
        ])->with('filter', $filter);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function actualitie(Request $request)
    {
        $id = $request['id'];
        $lang = Lang::locale();
        $lang_id = Language::where('lang', $lang)->first()->id;

        $actualities = Actualitie::with(['images'])->whereHas('actualities_lang', function ($q) use ($lang_id) {
            $q->where('language_id', $lang_id);
        })->where('id', $id)->get();

        return view('actualities', [
            'actualitie' => $actualities
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singlearticle()
    {
        return view('singlearticle');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function product(Request $request){

        $id = $request['id'];
        $lang = Lang::locale();

        $product = Product::with(['images', 'product_parts', 'names' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'texts' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }])->where('id', $id)->get();

        return view('product', [
            'products' => $product,
            'lang' => $lang
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function product_view(Request $request){
        $id = $request['id'];
        Product::find($id)->increment('views');
        return response()->json(['id' => $id]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function modules(){

        $lang = Lang::locale();

        $modules = PartsForProduct::with(['part_images', 'part_names' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'part_texts' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }])->get();

        return view('modules', [
            'modules' => $modules
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function options(){

        $lang = Lang::locale();

        $options = OptionsForProduct::with(['names' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'texts' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }, 'attributes' => function($q) use($lang) {
            $q->where('language', '=', $lang);
        }])->get();

        return view('options', [
            'options' => $options
        ]);
    }


}
