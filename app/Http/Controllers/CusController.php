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
}