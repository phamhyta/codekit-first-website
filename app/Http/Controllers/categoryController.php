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

class categoryController extends Controller
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
    public function add_category(){
        $this-> Authlogin();
        return view('admin.add_category');
    }
    public function all_category(){
        $this-> Authlogin();
        $all_category = DB::table('products')->paginate(5);
        $manage_category = view('admin.all_category')->with('all_category', $all_category);
        return view('admin.adminLayout')->with('admin.all_category', $manage_category);
    }
    public function save_category(Request $request){
        $this-> Authlogin();
        $data = array();
        $data['product_name'] = $request -> category_name;
        $data['description'] = $request -> category_desc;
        $data['id_category'] = $request -> category_status1;
        $data['id_class'] = $request -> category_status2;
        $data['price'] = $request -> price;
        $data['discount'] = $request -> discount;
        DB::table('products')->insert($data);
        Session::put('category_noti', 'Thêm sản phẩm thành công');
        return Redirect::to('/admin/add_category');
    }
    public function edit_category($id_product){
        $this-> Authlogin();
        $edit_category = DB::table('products')
        ->join('productClass','products.id_class',"=",'productClass.id_class')
        ->join('category','products.id_category',"=",'category.id_category')
        ->where('id_product', $id_product)->get();
        $categorys = Category::all();
        $productClass = ProductClass::all();
        return view('admin.edit_category', ['edit_category' => $edit_category, 'categorys'=>$categorys, 'productClass'=>$productClass]);
    }
    public function update_category(Request $request, $id_product){
        $this-> Authlogin();
        $data = array();
        $data['product_name'] = $request -> category_name;
        $data['description'] = $request -> category_desc;
        $data['id_category'] = $request -> category_status1;
        $data['id_class'] = $request -> category_status2;
        $data['price'] = $request -> price;
        $data['discount'] = $request -> discount;
        DB::table('products')->where('id_product', $id_product) -> update($data);
        Session::put('category_noti', 'Cập nhật sản phẩm thành công');
        return Redirect::to('/admin/all_category');
    }
    public function delete_category($id_product){
        $this-> Authlogin();
        DB::table('products')-> where('id_product', $id_product) -> delete();
        Session::put('category_noti', 'Xóa sản phẩm thành công');
        return Redirect::to('/admin/all_category');
    }
}