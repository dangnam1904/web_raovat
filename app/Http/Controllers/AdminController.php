<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\custom_users;

class AdminController extends Controller
{
    public function getLogin(){

        
        return view('admin.admin_login');
    }
    public function get_trangchu()
    {  
        return view('admin.admin_trangchu');
    }

    public function getLogout(){
        return view('admin.admin_login');
    }
   public function post_login(Request $req){
        $check= custom_users::where('Username',$req->username)->where('Password',$req->password)->where('idGroup',1)->get();
      
            return view('admin.admin_trangchu');   
        
    }
}