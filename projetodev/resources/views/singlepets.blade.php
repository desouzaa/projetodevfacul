@extends('layouts.main')
@section('title', 'Home')
@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
        <div class="card shadow-none">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-3 p-lg-5 p-md-5">
           
            @if(session('msg'))   
            <div id="msg" class="alert alert-success text-center mx-auto" role="alert">{{session('msg')}}</div>
            @endif
            @if(session('msg2'))   
            <div id="msg" class="alert alert-danger text-center mx-auto" role="alert">{{session('msg2')}}</div>
            @endif


            
            <h1 class="mb-4" style="text-align: center;"><strong></strong></h1>
            
        
                
            <div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dados</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">ID Pet: <strong>{{$pets[0]->id}}</strong></p>
                        <p class="card-text">Tutor: <strong>{{$pets[0]}}</strong></p>
                        <p class="card-text">Raça: <strong>{{$pets[0]->id_raca}}</strong></p>
                        <p class="card-text">Tamanho: <strong>{{$pets[0]->id_tamanho}}</strong></p>
                        <p class="card-text">Pelagem: <strong>{{$pets[0]->id_pelagem}}</strong></p>
                        <a href="" class="btn btn-secondary">Editar Dados</a>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-row-reverse text-center"> 
                
            <form action="/excluirpet/{{$pets[0]->id}}" method="POST">
            @csrf
            @method('DELETE')
                
           <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja deletar esta tamanho?')">Excluir</button>
            </form>
                </div>
         




            </div>
        </div>
    </div>
</div>


@endsection