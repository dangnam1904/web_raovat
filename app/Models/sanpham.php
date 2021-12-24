<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;

    protected $table= "sanpham";

    public function group_san_pham(){
        return $this -> belongsTo('App/sanpham','idUser','idSanPham');
    }

    public function order()
    {
        return $this -> belongsTo('App/order','idOrder','idSanPham');
    }

    public function gia_san_pham(){
        return $this -> hasOne('App/gia_san_pham','idgia_san_pham','idSanPham');
    }
    
    public function shopcart(){
        return $this ->hasOne('App/shopcart','idSanPham','idSanPham');
    }
}
