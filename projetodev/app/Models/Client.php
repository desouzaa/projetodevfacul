<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    

    public function pet(){
        return $this->belongsTo(Pet::class, 'id_cliente');
    }

    public function pedido(){
        return $this->hasMany(Pedido::class, 'id_cliente');
    }


 
    
}
