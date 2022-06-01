<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public function client() {
        return $this->belongsTo(Client::class, 'id_cliente');
    }    
    public function raca() {
        return $this->belongsTo(Raca::class, 'id_raca');
    }
    public function tamanho() {
        return $this->belongsTo(Tamanho::class, 'id_tamanho');
    }
    public function pelagen() {
        return $this->belongsTo(Pelagen::class, 'id_pelagem');
    }
  
    
   
}
