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

class CusController extends Controller
{
    public function Authlogin(){
        $admin_id = session::get('admin_id');
        if($admin_id){
            return redirect::to('/admin/dashboard');
        }
        else
        {
            return redirect::to('/admin/login') -> send();
        }
    }
    public function all_cus(){
        $this-> Authlogin();
        $all_cus = DB::table('customer')->paginate(10);
        return view('admin.all_cus',['all_cus' => $all_cus]);
    }
    public function all_bill(){
        $this-> Authlogin();
        $all_bill = DB::table('billdetail') 
        ->join('customer', 'billdetail.id_cus', "=", 'customer.id_cus')
        ->join('statustable', 'billdetail.id_status', "=", 'statustable.id_status')
        -> paginate(10);
        return view('admin.all_bill',['all_bill' => $all_bill]);
    }
    public function bill_detail($id_bill_detail){
        $this-> Authlogin();
        $bill_detail = DB::table('billdetail') 
        ->join('admin_cart', 'billdetail.id_cus', "=", 'admin_cart.id_cus') 
        ->join('productdetail', 'admin_cart.id_product_detail', "=", 'productdetail.id_product_detail') 
        ->join('statustable', 'billdetail.id_status', "=", 'statustable.id_status')
        ->join('products', 'productdetail.id_product', "=", 'products.id_product') 
        ->join('productcolor', 'productdetail.id_color', "=", 'productcolor.id_color')
        -> where('id_bill_detail', "=", $id_bill_detail)  ->get();
        return view('admin.bill_detail',['bill_detail' => $bill_detail]);
    }
    public function edit_bill($id_bill_detail){
        $this-> Authlogin();
        $edit_bill = DB::table('billdetail') 
        ->join('customer', 'billdetail.id_cus', "=", 'customer.id_cus')
        ->join('statustable', 'billdetail.id_status', "=", 'statustable.id_status') 
        -> where('id_bill_detail', "=", $id_bill_detail)-> get();
        $status = DB::table('statustable') -> get();
        //dd($status);
        return view('admin.edit_bill', ['edit_bill' => $edit_bill, 'status' => $status]);
    }
    public function update_bill(Request $request, $id_bill_detail){
        $this-> Authlogin();
        $data = array();
        $data['id_status'] = $request -> id_status;
        DB::table('billdetail')->where('id_bill_detail', $id_bill_detail) -> update($data);
        Session::put('bill_noti', 'Cập nhật trạng thái đơn hàng thành công');
        return Redirect::to('/admin/edit_bill/'.$id_bill_detail);
    }
    public function delete_bill($id_bill_detail){
        $this-> Authlogin();
        DB::table('billdetail')-> where('id_bill_detail', $id_bill_detail) -> delete();
        //Session::put('bill_noti', 'Xóa sản phẩm thành công');
        return Redirect::to('/admin/all_bill');
    }
}