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
        $id_cus = $request -> id_cus;
        $id_product_detail = $request->id_product_detail;
        $amount = $request -> amount;
        $product_info = DB::table('cart') -> join('productdetail','cart.id_product_detail', '=' ,'productdetail.id_product_detail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')
        ->join('category','products.id_category',"=",'category.id_category') ->where('id_cus', $id_cus)->paginate(16);
        $data['id_cus'] = $id_cus;
        $data['id_product_detail'] = $id_product_detail;
        $data['amount'] = $amount;
        //dd($data);
        return view('client.cart', ['product_info' => $product_info, 'color' => $color, 'size' => $size, 'id_product' => $id_product, 'amount' => $amount]);
    }
    // public function show_cart(Request $request){
    // $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
    //      $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
    //      return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product);
    //  }
}