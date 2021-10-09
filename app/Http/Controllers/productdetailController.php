<?php

namespace App\Http\Controllers;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();
use Illuminate\Support\Facades\Session;
class productdetailController extends Controller
{
    public function Authlogin(){
        $admin_id = session::get('admin_id');
        if($admin_id){
            return redirect::to('/admin/dashboard');
        }
        else{
            return redirect::to('/admin/login') -> send();
        }
    }

    public function add_productdetail(){ 
        $this-> Authlogin();
        $colors = Color::all();
        $add_productdetail = DB::table('products') -> select('product_name', 'id_product') -> get();
        return view('admin.add_productdetail',['colors'=>$colors, 'add_productdetail'=> $add_productdetail]);
    }
 
    public function all_productdetail(){
        $this-> Authlogin();
        $all_productdetail = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')->paginate(16);
        return view('admin.all_productdetail',['all_productdetail'=> $all_productdetail]);
    }

    public function save_productdetail(Request $request){
        $this-> Authlogin();
        $data = array();
        $img_list = array();
        if ($request->hasfile('url_image')) {
            foreach ($request->file('url_image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('img/anh_giay_nam'), $name);
                $img_list[] = $name;
            }
        }
        $data['id_color'] = $request -> id_color;
        $data['id_product'] = $request -> id_product;
        $data['product_size'] = $request -> size;
        $data['url_image'] = json_encode($img_list);
        $data['thumbnail'] = ($request -> thumbnail) ->getClientOriginalName(); 
        ($request -> thumbnail) ->move(public_path('img/anh_giay_nam'), $name);

        DB::table('productdetail')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('/admin/add_productdetail');
    }

    public function edit_productdetail($id_product_detail){
        $this-> Authlogin();
        $edit_productdetail = DB::table('productdetail')->where('id_product_detail', $id_product_detail) 
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')->paginate(16);
        $colors = Color::all();
        return view('admin.edit_productdetail',['colors'=>$colors, 'edit_productdetail'=> $edit_productdetail]);
    }

    public function update_productdetail(Request $request, $id_product_detail){
        $this-> Authlogin();
        $data = array();
        $img_list = array();
        if ($request->hasfile('product_image')) {
            foreach ($request->file('product_image') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('img/anh_giay_nam'), $name);
                $img_list[] = $name;
            }
        }
        $data['id_color'] = $request -> id_color;
        $data['product_size'] = $request -> size;
        $data['url_image'] = json_encode($img_list);
        $data['thumbnail'] = ($request -> thumbnail) ->getClientOriginalName(); 
        ($request -> thumbnail) ->move(public_path('img/anh_giay_nam'), ($request -> thumbnail) ->getClientOriginalName());

        DB::table('productdetail')->where('id_product_detail', $id_product_detail) -> update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('/admin/all_productdetail');
    }
    
    public function delete_productdetail($id_product_detail){
        $this-> Authlogin();
        DB::table('productdetail')->where('id_product_detail', $id_product_detail) -> delete();
        Session::put('message', 'Xóa nhật sản phẩm thành công');
        return Redirect::to('/admin/all_productdetail');
    }
}