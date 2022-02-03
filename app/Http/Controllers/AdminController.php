<?php

namespace App\Http\Controllers;

use App\PartImages;
use App\PartsForProduct;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{

    /*
     *
     * PRODUCT ********************************************************************
     *
     */

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin (){

        $products = Product::all();

        return view('admin.admin', [
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
        $image_path = public_path('images\products\product_'.$id_product); // upload path
        if(File::exists($image_path)) {
            File::deleteDirectory($image_path);
        }

        return back()->with('success', 'Product Deleted Successfully');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit_product (Request $request) {

        Product::where('id', $request['product_id'])->update(['name' => $request['name'], 'price' => $request['price'], 'en' => $request['en'], 'de' => $request['de']]);

        if ($photos = $request->file('photos')) {

            // Define upload path
            $destinationPath = public_path('/images/products/product_'.$request['product_id'].'/'); // upload path
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
            $destinationPath = public_path('/images/products/product_'.$new_product->id.'/'); // upload path
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
    public function delete_product_photo (Request $request) {

        $image_name = $request['image_name'];
        $id = $request['id'];
        $image_id = $request['photo_id'];
        $image_path = public_path('/images/products/product_'.$id.'/'.$image_name); // upload path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        ProductImages::where('id', $image_id)->delete();
        return response()->json(['image_id' => $image_id]);

    }


    /*
     *
     * PART *************************************************************************
     *
     */

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function parts (Request $request) {

        $parts = PartsForProduct::all();

        return view('admin.parts', [
            'parts' => $parts
        ]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete_part (Request $request) {

        $id_part = $request['id'];
        PartsForProduct::where('id', $id_part)->delete();
        PartImages::where('part_id', $id_part)->delete();
        $image_path = public_path('images\parts\part_'.$id_part); // upload path
        if(File::exists($image_path)) {
            File::deleteDirectory($image_path);
        }

        return back()->with('success', 'Part Deleted Successfully');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit_part (Request $request) {

        PartsForProduct::where('id', $request['part_id'])->update(['name' => $request['name'], 'price' => $request['price'], 'en' => $request['en'], 'de' => $request['de']]);

        if ($photos = $request->file('photos')) {

            // Define upload path
            $destinationPath = public_path('/images/parts/part_'.$request['part_id'].'/'); // upload path
            foreach($photos as $img) {
                // Upload Orginal Image
                $profileImage =$img->getClientOriginalName();
                $img->move($destinationPath, $profileImage);

                //save photo in database
                $new_photo = new PartImages();
                $new_photo->part_id = $request['part_id'];
                $new_photo->name = $profileImage;
                $new_photo->save();
            }

        }

        return back()->with('success', 'Part Saved Successfully');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_part (Request $request) {

        //save part
        $new_part = new PartsForProduct();
        $new_part->name = $request['name'];
        $new_part->price = $request['price'];
        $new_part->en = $request['en'];
        $new_part->de = $request['de'];
        $new_part->save();

        if ($photos = $request->file('photos')) {

            // Define upload path
            $destinationPath = public_path('/images/parts/part_'.$new_part->id.'/'); // upload path
            foreach($photos as $img) {
                // Upload Orginal Image
                $profileImage =$img->getClientOriginalName();
                $img->move($destinationPath, $profileImage);

                //save photo in database
                $new_photo = new PartImages();
                $new_photo->part_id = $new_part->id;
                $new_photo->name = $profileImage;
                $new_photo->save();
            }

        }

        return back()->with('success', 'Part Saved Successfully');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete_part_photo (Request $request) {

        $image_name = $request['image_name'];
        $id = $request['id'];
        $image_id = $request['photo_id'];
        $image_path = public_path('/images/parts/part_'.$id.'/'.$image_name); // upload path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        PartImages::where('id', $image_id)->delete();
        return response()->json(['image_id' => $image_id]);

    }

    /*
     *
     * OPTION *************************************************************************
     *
     */
}
