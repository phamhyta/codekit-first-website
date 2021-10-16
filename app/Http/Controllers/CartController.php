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
        $id_cus = $request -> id_cus;
        $data['id_cus'] = $request -> id_cus;
        $data['id_product_detail'] = $request->id_product_detail;
        $data['ammount'] = $request -> amount;
        $data['id_status'] = 0;
        DB::table('cart')->insert($data);
        DB::table('admin_cart') ->insert($data);
        return Redirect::to('/cart/'.$id_cus);
    }
    
    public function creat_billdetail($id_cus){
        $data['id_cus'] = $id_cus;
        DB::table('billdetail')->insert($data);
        return Redirect::to('/bill/'.$id_cus);
    }
    public function save_bill($id_cus){
        $bill = DB::table('billdetail') -> select('id_bill_detail') -> where ('id_cus', '=', $id_cus) -> get();
        $id_bill_detail =  $bill[0] -> id_bill_detail;
        $id_cart_list = array();
        $id_cart_res = DB::table('admin_cart') -> select('id_cart') -> where ('id_cus', '=', $id_cus) -> get();
        foreach ($id_cart_res as $id_cart) {
            $id_cart_list[] = $id_cart -> id_cart;
        }
        $id_cart_size = sizeof($id_cart_list);
        $data = array();
        for($i = 0; $i < $id_cart_size; $i++ ){
            $data[] = (
                array(
                    'id_cart' => $id_cart_list[$i], 
                    'id_bill_detail' => $id_bill_detail,
                    //'id_status' => 1
                )
            );
        }
        $status['id_status'] = 1;
        //dd($data);
        DB::table('bill') -> insert($data);

        DB::table('cart') -> where('id_cus', '=' , $id_cus) -> delete();
        DB::table('admin_cart') -> where('id_cus', "=",$id_cus) -> update($status);
        return Redirect::to('/');
    }

    public function show_cart($id_cus){
        $product_info = DB::table('cart') 
        ->join('productdetail','cart.id_product_detail', '=' ,'productdetail.id_product_detail')
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
        
        $cus_info = DB::table('customer') -> where('id_cus', '=' , $id_cus) -> get();
        return view('client.cart', ['product_info' => $product_info, 'total' => $total, 'products' => $products, 'cus_info' => $cus_info]);
    }
    public function delete_cart($id_cus, $id_cart){
        DB::table('cart')-> where('id_cart', $id_cart) -> delete();
        return Redirect::to('/cart/'.$id_cus);
    }
}