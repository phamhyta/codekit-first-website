<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function save_cart(Request $request){
        $id_product = $request->id_product;
        $color = $request->color;
        $size = $request->size;
        $product_info = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->paginate(16);
        $data['color'] = $color;
        $data['id_product'] = $id_product;
        //dd($data);
        return view('client.cart', ['products' => $product_info]);
    }
    // public function show_cart(Request $request){
    // $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
    //      $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
    //      return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product);
    //  }
}