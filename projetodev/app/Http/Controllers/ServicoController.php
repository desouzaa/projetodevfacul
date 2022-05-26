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



}