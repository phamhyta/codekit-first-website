<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function home() {
        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->skip(0)->take(28)->get();
        return view('client.home', ['products' => $products]);
    }

    public function index(){
        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->paginate(16);
        return view('client.productList', ['products' => $products]);
    }

    public function show($product_name, $id_product, $id_product_detail){
        $productList = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->skip(0)->take(28)->get();

        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productClass','products.id_class',"=",'productClass.id_class')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->where('id_product_detail','=',$id_product_detail)->get(); // phục vụ hiểm thị class sản phẩm, giá gốc và giá sản phẩm sau khi giảm giá

        $componentList = DB::table('productDetail')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->select('*')
        ->where('id_product','=',$id_product)
        ->get(); //phục vụ cho hiểm thị hình ảnh dựa theo màu sắc, hiểm thị list màu và size của sản phẩm

        return view('client.productDetail', ['products' => $products, 'id_product' => $id_product, 'id_product_detail' => $id_product_detail, 'componentList' => $componentList, 'productName' => $product_name, 'productList' => $productList]);
    }

    public function showByColor($product_name, $id_product, $id_product_detail, $color_name){
        $productList = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->skip(0)->take(28)->get();

        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productClass','products.id_class',"=",'productClass.id_class')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->where('id_product_detail','=',$id_product_detail)->get(); // phục vụ hiểm thị class sản phẩm, giá gốc và giá sản phẩm sau khi giảm giá

        $componentList = DB::table('productDetail')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->select('*')
        ->where('id_product','=',$id_product)
        ->get(); //phục vụ cho hiểm thị hình ảnh dựa theo màu sắc, hiểm thị list màu và size của sản phẩm

        return view('client.productDetail', ['products' => $products, 'id_product' => $id_product, 'id_product_detail' => $id_product_detail, 'componentList' => $componentList, 'productName' => $product_name, 'productList' => $productList, 'colorName'=>$color_name]);
    }
}
