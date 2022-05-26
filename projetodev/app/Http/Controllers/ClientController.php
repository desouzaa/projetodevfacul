<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Endereco;
use App\Models\Telefone;
use Exception;

class ClientController extends Controller
{
    
    public function listar(){

    $clientes = Client::all();

    return view('clientes', ['clientes' => $clientes]);

    }


    public function cadastrar(){
        if(auth()->check()){  
        return view('cadastrarcliente');

    }else{
        return view('login');
    }}

    public function store(Request $request){

        try{
        $cliente = new Client;
        $cliente->nome_completo = $request->nome_completo;
        $cliente->cpf = $request->cpf;
        $cliente->save();
        
        $result = Client::where('cpf',$request->cpf)->get();    

        $endereco = new Endereco;
        $endereco->id_cliente = $result[0]->id;
        $endereco->cep = $request->cep;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->uf;
        $endereco->complemento = $request->complemento1;
        $endereco->save();

        $telefone = new Telefone;
        $telefone->id_cliente = $result[0]->id;
        $telefone->numero_telefone = $request->telefone;
        $telefone->save();
        

        $clientes = Client::all();
        return redirect('clientes')->with('clientes',$clientes)->with('msg', 'Cliente cadastrado com sucesso!');

        }catch(Exception $e){

        $clientes = Client::all();

        return redirect('clientes')->with('clientes',$clientes)->with('msg2', 'Erro ao cadastrar - '+$e);
        }

    }

    public function storetelefone(Request $request){
        try{
            $telefone = new Telefone;
            $telefone->id_cliente = $request->idd;
            $telefone->numero_telefone = $request->telefone;
            $telefone->save();


            $cliente = Client::where('id',$request->idd)->get();
            $endereços = Endereco::where('id_cliente',$cliente[0]->id)->get();
            $telefones = Telefone::where('id_cliente',$cliente[0]->id)->get();
            return view('singlecliente', ['cliente'=>$cliente[0], 'enderecos'=>$endereços,'telefones'=>$telefones]);

    }catch(Exception $e){
        return view('index');
    }
}

    public function storeendereco (Request $request){

        try{

        $endereco = new Endereco;
        $endereco->id_cliente = $request->idd;
        $endereco->cep = $request->cep;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->uf;
        $endereco->complemento = $request->complemento1;
        $endereco->save();


        $cliente = Client::where('id',$request->idd)->get();
            $endereços = Endereco::where('id_cliente',$cliente[0]->id)->get();
            $telefones = Telefone::where('id_cliente',$cliente[0]->id)->get();
            return view('singlecliente', ['cliente'=>$cliente[0], 'enderecos'=>$endereços,'telefones'=>$telefones]);

        }catch(Exception $e){
            return view('index');
        }

    }

    public function singlecliente($id){

        if(auth()->check()){ 

        $cliente = Client::where('id',$id)->get();
        $endereços = Endereco::where('id_cliente',$cliente[0]->id)->get();
        $telefones = Telefone::where('id_cliente',$cliente[0]->id)->get();
        return view('singlecliente', ['cliente'=>$cliente[0], 'enderecos'=>$endereços,'telefones'=>$telefones]);


        }else{           
         return view('login');
        }

    }

    public function destroy($id){


        try{
        $telefones = Telefone::where('id_cliente',$id)->get();
        foreach($telefones as $telefone){
            Telefone::findOrFail($telefone->id)->delete();
        }
        $enderecos = Endereco::where('id_cliente',$id)->get();
        foreach($enderecos as $endereco){
            Endereco::findOrFail($endereco->id)->delete();
        }
        Client::findOrFail($id)->delete();
        $clientes = Client::all();
        return redirect('clientes')->with('clientes',$clientes)->with('msg', 'Cliente excluído com sucesso!');

        }catch(Exception $e){
        $clientes = Client::all();
        return redirect('clientes')->with('clientes',$clientes)->with('msg2', 'Não foi possível excluir o cliente!');
        }



    }

    public function destroytelefone($id){
        try{
            Telefone::findOrFail($id)->delete();
            $clientes = Client::all();
            return redirect('clientes')->with('clientes',$clientes)->with('msg', 'Telefone excluído com sucesso!');
    
            }catch(\Illuminate\Database\QueryException $e){
    
            $clientes = Client::all();
            return redirect('clientes')->with('clientes',$clientes)->with('msg2', 'Erro, não foi possível excluir o telefone');
    
            }
    }
    
    public function destroyendereco($id){
        try{
            Endereco::findOrFail($id)->delete();
            $clientes = Client::all();
            return redirect('clientes')->with('clientes',$clientes)->with('msg', 'Endereço excluído com sucesso!');
    
            }catch(\Illuminate\Database\QueryException $e){
    
            $clientes = Client::all();
            return redirect('clientes')->with('clientes',$clientes)->with('msg2', 'Erro, Não foi possível excluir o endereço');
    
            }
    }

    public function cadastrartel($id){ 
        
        if(auth()->check()){  
        
        $cliente = Client::where('id',$id)->get();
        
        return view('cadastrartelefone', ['cliente'=>$cliente[0]]);

    }else{
        return view('login');
    }}

    public function cadastrarend($id){
         if(auth()->check()){  
        $cliente = Client::where('id',$id)->get();
        return view('cadastrarendereco', ['cliente'=>$cliente[0]]);

    }else{
        return view('login');
    }}





}