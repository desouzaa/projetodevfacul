<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tamanho;

class TamanhoController extends Controller
{
    
    public function listar(){
        if(auth()->check()){
    $tamanhos = Tamanho::all();

    return view('tamanhos', ['tamanhos' => $tamanhos]);

    }else{
        return view('login');
    }
    }
    
    public function cadastrar(){
        if(auth()->check()){
        return view('cadastrartamanho');
    
        }else{
            return view('login');
        }}
    
        public function store(Request $request){
            $tamanho = new Tamanho;
            $tamanho->descricao = $request->descricao;
            $tamanho->save();
            $tamanhos = Tamanho::all();
            return redirect('tamanhos')->with('tamanhos',$tamanhos)->with('msg', 'Tamanho cadastrado com sucesso!');
        
            }

            
    public function destroy($id){

        try{
        Tamanho::findOrFail($id)->delete();
        $tamanhos = Tamanho::all();
        return redirect('tamanhos')->with('tamanhos',$tamanhos)->with('msg', 'Tamanho excluído com sucesso!');

        }catch(\Illuminate\Database\QueryException $e){

        $tamanhos = Tamanho::all();
        return redirect('tamanhos')->with('tamanhos',$tamanhos)->with('msg2', 'Erro, Tamanho está sendo utilizado por algum Pet');

        }


    }


}