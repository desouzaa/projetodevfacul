<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pelagen;

class PelagemController extends Controller
{
    
    public function listar(){
    if(auth()->check()){
    $pelagens = Pelagen::all();

    return view('pelagens', ['pelagens' => $pelagens]);

    }else{
        return view('login');
    }

}

    public function cadastrar(){
        if(auth()->check()){    
        return view('cadastrarpelagem');
    
    }else{
        return view('login');
    }
}
    
    public function store(Request $request){
            $pelagem = new Pelagen;
            $pelagem->descricao = $request->descricao;
            $pelagem->save();
            $pelagens = Pelagen::all();
            return redirect('pelagens')->with('pelagens',$pelagens)->with('msg', 'Pelagem cadastrada com sucesso!');
        
    }

    public function destroy($id){

        try{
        Pelagen::findOrFail($id)->delete();
        $pelagens = Pelagen::all();
        return redirect('pelagens')->with('pelagens',$pelagens)->with('msg', 'Pelagem excluída com sucesso!');

        }catch(\Illuminate\Database\QueryException $e){

        $pelagens = Pelagen::all();
        return redirect('pelagens')->with('pelagens',$pelagens)->with('msg2', 'Erro, Pelagem está sendo utilizada poer algum pet');

        }


    }

    


}