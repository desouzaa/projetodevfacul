<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;

class PedidoController extends Controller
{
    
    public function listar(){

    $pedidos = Pedido::all();

    return view('pedidos', ['pedidos' => $pedidos]);

    }



}