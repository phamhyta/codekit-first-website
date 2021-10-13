<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Auth\Events\Login;
// use Illuminate\Support\Facades\Redirect;
session_start();
// use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Session;
class voucherController extends Controller
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
    public function add_voucher(){
        $this -> Authlogin();
        return view('admin.add_voucher');
    }
    public function all_voucher(){
        $this -> Authlogin();
        $all_voucher = DB::table('voucher')->paginate(16);
        $manage_voucher = view('admin.all_voucher')->with('all_voucher', $all_voucher);
        return view('admin.adminLayout')->with('admin.all_voucher', $manage_voucher);
    }
    public function save_voucher(Request $request){
        $this -> Authlogin();
        $data = array();
        $data['percent'] = $request -> percent;
        $data['decrease'] = $request -> decrease;
        $data['effective_date'] = $request -> effective_date;
        $data['HSD'] = $request -> HSD;
        $data['voucher_desc'] = $request -> voucher_desc;
        DB::table('voucher')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('/admin/add_voucher');
    }
    public function edit_voucher($id_voucher){
        $this -> Authlogin();
        $edit_voucher = DB::table('voucher')->where('id_voucher', $id_voucher)->get();
        $manage_voucher = view('admin.edit_voucher')->with('edit_voucher', $edit_voucher);
        return view('admin.adminLayout')->with('admin.edit_voucher', $manage_voucher);

    }
    public function update_voucher(Request $request, $id_voucher){
        $this -> Authlogin();
        $data = array();
        $data['voucher_desc'] = $request -> voucher_desc;
        $data['percent'] = $request -> percent;
        $data['decrease'] = $request -> decrease;
        $data['create_at'] = $request -> create_at;
        $data['HSD'] = $request -> HSD;
        DB::table('voucher')->where('id_voucher', $id_voucher) -> update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all_voucher');
    }
    public function delete_voucher($id_voucher){
        $this -> Authlogin();
        DB::table('voucher')->where('id_voucher', $id_voucher) -> delete();
        Session::put('message', 'Xóa nhật sản phẩm thành công');
        return Redirect::to('all_voucher');
    }
}