<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_ssion extends Model
{
    use HasFactory;
    protected $table='chat_ssion';
    public function user(){
        return $this -> hasOne('App/user','idUser','idchat_ssion');
    }
}

