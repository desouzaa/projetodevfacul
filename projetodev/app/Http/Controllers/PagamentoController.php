<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pagamento;

class PagamentoController extends Controller
{
    
            
    public function listar(){

    if(auth()->check()){

    $pagamentos = Pagamento::all();

    return view('pagamentos', ['pagamentos' => $pagamentos]);

    }else{
        return view('login');
    }

}

public function cadastrar(){

    if(auth()->check()){
        return view('cadastrarpagamento');
    }else{
        return view('login');
    }
}


public function salvarpagamento(Request $request){
    $pagamento = new Pagamento;
    $pagamento->nome = $request->nomepagamento;
    $pagamento->descricao = $request->descricao;
    
    $pagamento->save();
    $pagamentos = Pagamento::all();
    return redirect('pagamentos')->with('pagamentos',$pagamentos)->with('msg', 'Pagamento cadastrado com sucesso!');

}

public function destroy($id){
    try{
    Pagamento::findOrFail($id)->delete();
    $pagamentos = Pagamento::all();
    return redirect('pagamentos')->with('pagamentos',$pagamentos)->with('msg', 'Pagamento excluído com sucesso!');

    }catch(\Illuminate\Database\QueryException $e){

    $pagamentos = Pagamento::all();
    return redirect('pagamentos')->with('pagamentos',$pagamentos)->with('msg2', 'Erro, pagamento está sendo utilizada por algum pedido');

    }


}

}