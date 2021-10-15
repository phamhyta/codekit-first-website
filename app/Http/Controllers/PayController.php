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

class PayController extends Controller
{
    public function index(Request $request){
        $discount = $request -> discount;
        return view('client.pay',['discount' => $discount]);
    }
}