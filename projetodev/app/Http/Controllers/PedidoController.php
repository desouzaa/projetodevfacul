<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\Models\Client;
use App\Models\Pet;
use App\Models\servico;
use App\Models\Iten;


class PedidoController extends Controller
{
    
    public function listar(){
        if(auth()->check()){
    
    $pedidos = Pedido::all();
    return view('pedidosfinalizados', ['pedidos' => $pedidos]);

    }else{
        return view('login');
        
    }}

    public function cadastrar(){

        if(auth()->check()){
            $clientes = Client::all();
            $pets = Pet::all();
            $servicos = Servico::all();
        
            return view('cadastrarpedido', ['clientes'=>$clientes,'pets'=>$pets, 'servicos'=>$servicos]);
        
        }else{
            return view('login');
        }

    }


    public function store(Request $request){
        $pedido = Pedido::create([
        'data'=>$request->data,
        'id_cliente' =>$request->cliente, 
        'id_pet'=>$request->pet]);
        
        $pedi = $pedido->id;
        $qtdlinha = $request->qtddelinha;
       
        for($i = 1; $i<=$qtdlinha; $i++){
            
        $iten = new Iten;  
        $iten->id_pedido = $pedi;
        $iten->id_servico =  $request->{'servicoo'.$i};
        $iten->qtd =         $request->{'quantidade'.$i};
        $iten->preco_unitario = $request->{'preco'.$i};
        $iten->desconto = $request->{'descontoitem'.$i};
        $iten->save();
            
        }

        $pedidos = Pedido::all();

        return view('pedidosfinalizados', ['pedidos'=>$pedidos]);

    }

    public function singlepedido($id){
        if(auth()->check()){

        $pedidos = Pedido::find($id);
        $itens = Iten::where('id_pedido',$id)->get();

        $totalvalorsdesc = $itens->sum('preco_unitario');
        $descc = $itens->sum('desconto');
        $totalvalorfim = $totalvalorsdesc - $descc;

        return view('singlepedido',['pedidos'=>$pedidos, 'itens'=>$itens, 'totalvalorfim'=>$totalvalorfim]);

        }else{
        return view('login');
        }
    }
}