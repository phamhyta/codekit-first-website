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
        // $id_product = $request->id_product;
        // $color = $request->color;
        // $size = $request->size;
         $id_cus = $request -> id_cus;
        // $id_product_detail = $request->id_product_detail;
        // $amount = $request -> amount;
        // $product_info = DB::table('cart') -> join('productdetail','cart.id_product_detail', '=' ,'productdetail.id_product_detail')
        // ->join('products','productDetail.id_product',"=",'products.id_product')
        // ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        // ->join('productClass','products.id_class',"=",'productClass.id_class')
        // ->join('category','products.id_category',"=",'category.id_category') ->where('id_cus', $id_cus)->get();
        $data['id_cus'] = $request -> id_cus;
        $data['id_product_detail'] = $request->id_product_detail;
        $data['ammount'] = $request -> amount;
        DB::table('cart')->insert($data);
        //dd($data);
        return Redirect::to('/cart/'.$id_cus);
        //return view('client.cart', ['product_info' => $product_info, 'color' => $color, 'size' => $size, 'id_product' => $id_product, 'amount' => $amount]);
    }
    public function show_cart($id_cus){
        $product_info = DB::table('cart') -> join('productdetail','cart.id_product_detail', '=' ,'productdetail.id_product_detail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')
        ->join('category','products.id_category',"=",'category.id_category') ->where('id_cus', $id_cus)->get();
        $total = DB::table('cart') -> selectRaw('sum(ammount*discount) as "total"') 
        -> join('productdetail','cart.id_product_detail', '=' ,'productdetail.id_product_detail')
        ->join('products','productDetail.id_product',"=",'products.id_product') -> where('id_cus', $id_cus) -> get();
        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->skip(0)->take(28)->get();
        return view('client.cart', ['product_info' => $product_info, 'total' => $total, 'products' => $products]);
    }
    public function delete_cart($id_cart, $id_cus){
        DB::table('cart')-> where('id_cart', $id_cart) -> delete();
        return Redirect::to('/cart/'.$id_cus);
    }
}