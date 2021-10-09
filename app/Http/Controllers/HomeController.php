<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function search_product(request $request){
        $keywords = $request-> keyword_submit;
        $search_product = DB::table('products') 
        ->join('productdetail',function($join) use($keywords) {
            $join -> on('products.id_product',"=",'productdetail.id_product')
            -> where('product_name','like', '%' . $keywords . '%');
        })->join('productColor','productdetail.id_color',"=",'productColor.id_color')-> get();
        return view('client.search',['search_product'=> $search_product]);
    }
}