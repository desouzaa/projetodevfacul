<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['data', 'id_cliente', 'id_pet'];
    
    public function client() {
        return $this->hasOne(Client::class, 'id');
    }  

  


}
