<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servico;

class ServicoController extends Controller
{
    
    public function listar(){
        if(auth()->check()){
    $servicos = Servico::all();

    return view('servicos', ['servicos' => $servicos])->with('msg', 'Serviço cadastrado com sucesso!');

    }else{
        return view('login');
    }}

    public function cadastrar(){

        if(auth()->check()){
            return view('cadastrarservico');
        }else{
            return view('login');
        }
    }

    public function salvarservico(Request $request){
        $servico = new Servico;
        $servico->servico = $request->servico;
        $servico->descricao = $request->descricao;
        $servico->preco = $request->preco;
        $servico->save();
        $servicos = Servico::all();
        return redirect('servicos')->with('servicos',$servicos)->with('msg', 'Serviço cadastrado com sucesso!');

    }


    public function destroy($id){

        try{
        Servico::findOrFail($id)->delete();
        $servicos = Servico::all();
        return redirect('servicos')->with('servicos',$servicos)->with('msg', 'Serviço excluído com sucesso!');

        }catch(\Illuminate\Database\QueryException $e){

        $servicos = Servico::all();
        return redirect('servicos')->with('servicos',$servicos)->with('msg2', 'Erro, Serviço está sendo utilizada por algum pedido');

        }


    }
}

