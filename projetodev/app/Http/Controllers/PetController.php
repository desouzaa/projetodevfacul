<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Pet;
use App\Models\Client;
use App\Models\Raca;
use App\Models\Pelagen;
use App\Models\Tamanho;

class PetController extends Controller
{
    
    public function listar(){
        if(auth()->check()){

    $pets = Pet::all();

    return view('pets', ['pets' => $pets]);

    }else{
        return view('login');
    }}

    public function cadastrar(){
        if(auth()->check()){
        $clientes = Client::all();
        $racas = Raca::all();
        $pelagens = Pelagen::all();
        $tamanhos = Tamanho::all();
    
        return view('cadastrarpet', ['clientes'=>$clientes,'racas'=>$racas, 'pelagens'=>$pelagens, 'tamanhos'=>$tamanhos]);
    
        }else{
            return view('login');
        }}
    
    public function store(Request $request){
            $pet = new Pet;
            $pet->nome_pet = $request->nomepet;
            $pet->id_cliente = $request->tutor;
            $pet->id_raca = $request->raca;
            $pet->id_pelagem = $request->pelagem;
            $pet->id_tamanho = $request->tamanho;
            $pet->descricao = '0';
            $pet->save();

            $pets = Pet::all();
            return redirect('pets')->with('pets', $pets)->with('msg', 'Pet cadastrado com sucesso!');
        
            }

            public function destroy($id){

                try{
                Pet::findOrFail($id)->delete();
                $pets = Pet::all();
                return redirect('pets')->with('pets',$pets)->with('msg', 'Pet excluído com sucesso!');
        
                }catch(\Illuminate\Database\QueryException $e){
        
                $pets = Pet::all();
                return redirect('pets')->with('pets',$pets)->with('msg2', 'Erro, Pet tem pedidos, ou tutores cadastrados');
        
                }
        
        
            }
            
            public function singlepett($id){
            if(auth()->check()){
            $pets = Pet::where('id',$id)->get();
            return view('singlepets', ['pets'=>$pets]);

            }else{
                return view('login');
            }}



}