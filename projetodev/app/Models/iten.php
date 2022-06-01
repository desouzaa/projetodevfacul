<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
    use HasFactory;

    public function servico(){
        return $this->belongsTo(Servico::class, 'id_servico');
    }

    public function pedido(){
        return $this->belongsTo(Pedido::class, 'id');
    }

   
}
