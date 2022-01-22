<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin (){

        $products = Product::all();

        return view('admin', [
            'products' => $products
        ]);
    }

    /**
     * @param Request $request
     */
    public function delete_product (Request $request) {

        $id_product = $request['id'];
        Product::where('id', $id_product)->delete();
        ProductImages::where('product_id', $id_product)->delete();
        $image_path = public_path('images\product_'.$id_product); // upload path
        if(File::exists($image_path)) {
            File::deleteDirectory($image_path);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit_product (Request $request) {

        Product::where('id', $request['product_id'])->update(['name' => $request['name'], 'price' => $request['price'], 'en' => $request['en'], 'de' => $request['de']]);

        if ($photos = $request->file('photos')) {

            // Define upload path
            $destinationPath = public_path('/images/product_'.$request['product_id'].'/'); // upload path
            foreach($photos as $img) {
                // Upload Orginal Image
                $profileImage =$img->getClientOriginalName();
                $img->move($destinationPath, $profileImage);

                //save photo in database
                $new_photo = new ProductImages;
                $new_photo->product_id = $request['product_id'];
                $new_photo->name = $profileImage;
                $new_photo->save();
            }

        }

        return back()->with('success', 'Product Saved Successfully');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_product (Request $request) {

        //save product
        $new_product = new Product();
        $new_product->name = $request['name'];
        $new_product->price = $request['price'];
        $new_product->en = $request['en'];
        $new_product->de = $request['de'];
        $new_product->save();

        if ($photos = $request->file('photos')) {

            // Define upload path
            $destinationPath = public_path('/images/product_'.$new_product->id.'/'); // upload path
            foreach($photos as $img) {
                // Upload Orginal Image
                $profileImage =$img->getClientOriginalName();
                $img->move($destinationPath, $profileImage);

                //save photo in database
                $new_photo = new ProductImages;
                $new_photo->product_id = $new_product->id;
                $new_photo->name = $profileImage;
                $new_photo->save();
            }

        }

        return back()->with('success', 'Product Saved Successfully');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete_photo (Request $request) {

        $image_name = $request['image_name'];
        $id = $request['id'];
        $image_id = $request['photo_id'];
        $image_path = public_path('/images/product_'.$id.'/'.$image_name); // upload path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        ProductImages::where('id', $image_id)->delete();
        return response()->json(['image_id' => $image_id]);

    }
}
