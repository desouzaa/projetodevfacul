<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'id_cliente', 'id_pet'];

    public function client(){
        return $this->belongsTo(Client::class, 'id_cliente');
    }

    public function pet(){
        return $this->belongsTo(Pet::class, 'id_pet');
    }

    public function iten(){
        return $this->hasMany(Iten::class, 'id');
    }
    

}
