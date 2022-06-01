<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public function client() {
        return $this->hasOne(Client::class, 'id');
    }    
    public function raca() {
        return $this->hasOne(Raca::class, 'id');
    }
    public function tamanho() {
        return $this->hasOne(Tamanho::class, 'id');
    }
    public function pelagen() {
        return $this->hasOne(Pelagen::class, 'id');
    }
  
    
   
}
