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
}