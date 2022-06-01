<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\pedido;

class UserController extends Controller
{
    public function logar(Request $request){
        
        
        if(Auth::attempt(['email'=> $request->email, 'password'=>$request->senha])){

            $request->session()->regenerate();
            return redirect('index');
            
            
        }else{
            return redirect('/')->with('msg','Login e/ou senha incorretos');
        }
        
    }

    public function index(){

    if(auth()->check()){
    return view('index');
    }else{
    return view('login');
    }

}

public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }
}