<?php

namespace App\Http\Controllers\Product;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Concern\GlobalTrait;

class ProductController extends Controller
{
	use GlobalTrait;

    public function create(Request $request) {
    	$request->validate(
            [
                'name'          => 'required|max:150',
                'image'         => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]
        );
    	$product_id = 'PRODUCT'.rand(10000, 999999);
    	$image_link = $this->imageUpload($request);
        $product = Product::create(
        	[
        		'product_id' => $product_id,
        		'name'       => $request->name,
        		'image'      => $image_link
        	]
        );
        return redirect('user/dashboard')->with('success', 'Product Added Successfully.');
    }
}
