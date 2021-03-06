<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productPage($product_id,$shop_id){
        return "This is product page for product id ".$product_id." for shop ".$shop_id;
    }

    function productList(){
        $product_lists =['bag','apple','book'];
        return view('product',[
            'products'=>$product_lists
        ]);
    }
    function productDetail($product_id){
        return "hello product for product Id ".$product_id;
    }
}
