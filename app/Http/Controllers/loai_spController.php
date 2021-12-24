<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class loai_spController extends Controller
{
    public function getadd_loaisp(){
        
        return view('admin.Loai_sp.add_Loaisp');
    }

    public function post_loaisp(Request $req){
        $data=array();
        $data['idNhomSp']=$req->id;
        $data['TenNhomSP']= $req ->tenNhom;
        $data['Mota']= $req ->mota;
       
        DB::table('group_san_pham')->insert($data);
        Session::put('message','Thêm thành công');
        return view('admin.Loai_sp.add_Loaisp');

    }

    public function getedit_loaisp(){
        
        return view('admin.Loai_sp.edit_Loaisp');
    }
    public function getdelete_loaisp(){
        
        return view('admin.Loai_sp.delete_Loaisp');
    }

    public function getshow_loaisp(){
        
        return view('admin.Loai_sp.show_Loaisp');
    }
    
    
}
