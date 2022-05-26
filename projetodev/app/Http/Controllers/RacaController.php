<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Raca;

class RacaController extends Controller
{
    
    public function listar(){
        if(auth()->check()){
    $racas = Raca::all();

    return view('racas', ['racas' => $racas]);

    }else{
        return view('login');
    }}

    public function cadastrar(){
        if(auth()->check()){
    return view('cadastrarraca');

    }else{return view('login');
}}

    public function store(Request $request){
        $raca = new Raca;
        $raca->descricao = $request->descricao;
        $raca->save();
        $racas = Raca::all();
        return redirect('racas')->with('racas', $racas)->with('msg', 'Raça cadastrada com sucesso!');
        }

        public function destroy($id){

            try{
            Raca::findOrFail($id)->delete();
            $racas = Raca::all();
            return redirect('racas')->with('racas',$racas)->with('msg', 'Raça excluído com sucesso!');
    
            }catch(\Illuminate\Database\QueryException $e){
    
            $racas = Raca::all();
            return redirect('racas')->with('racas',$racas)->with('msg2', 'Erro, Raça está sendo utilizada por algum Pet');
    
            }
    
    
        }
}