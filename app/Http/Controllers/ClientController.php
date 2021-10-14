<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Redirect;
session_start();
//use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function Authlogin(){
        $id_cus = session::get('id_cus');
        if($id_cus){
            return redirect::to('/');
        }
        else
        {
            return redirect::to('/login') -> send();
        }
    }

    public function show_sign_in(){
        return view('client.login');
    }

    public function show_sign_up(){
        return view('client.clientSignUp');
    }
    public function show_profile(){
        //$this -> Authlogin();
        return view('client.clientProfile');
    }

    public function signIn(Request $request){
        $client_email = $request->email;
        $client_password = $request->cus_password;
        $result = DB::table('customer')->where('email', $client_email)->where('cus_password', $client_password)->first();
        
        if($result){
            Session::put('username', $result -> username);
            Session::put('id_cus', $result -> id_cus);
            return redirect::to('/');
        }else{
            session::put('login_noti_client', 'Mật khẩu hoặc tài khoản sai');
            return redirect::to('/signin');
        }
    }

    public function signUp(Request $request){
        $data = array();
        $data['username'] = $request -> username;
        $data['cus_password'] = $request -> cus_password;
        $data['email'] = $request -> email;
        $data['full_name'] = $request -> fullname;
        $data['phone_number'] = $request -> phone_number;
        $data['address'] = $request -> address;
        $data['gender'] = $request -> gender;

        DB::table('customer')->insert($data);
        return Redirect::to('/signin');
    }
    public function logout(){
        $this -> Authlogin();
        Session::put('username', null);
        Session::put('id_cus', null);
        return redirect::to('/');
    }
}
