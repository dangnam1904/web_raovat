<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group_san_pham extends Model
{
    use HasFactory;
    protected $table= "group_san_pham";
    
     public function sanpham()
    {
        return $this -> hasMany('App/sanpham', 'idNhomSp','idNhomSp');
    }
    public function custom_users(){
        return $this -> hasMany('App/custom_users','');
    }
}
