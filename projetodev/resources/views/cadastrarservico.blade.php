@extends('layouts.main')
@section('title', 'Home')
@section('content')


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-8 mx-auto">
        <div class="card shadow-none">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-3 p-lg-5 p-md-5">

                <form  id="form_cadastro" method="POST" action="/salvarservico/"> 
            
           
                    <div id="msg" class="alert alert-danger" role="alert"></div>
              
                
                    <h2 class="mb-4" style="text-align: center;">Novo Serviço</h2>
                   
                    <label style="font-weight: bolder;" class="form-label"></label>
                
                
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="servico" id="servico" required minlength="2" maxlength="50" placeholder="Serviço">
                        <label for="servico">Serviço</label>
                    </div>   

                    <div class="form-floating mb-3">
                        <textarea style="height: 100px" type="text" class="form-control" name="descricao" id="descricao" required minlength="1" maxlength="50" placeholder="Descrição"></textarea>
                        <label for="descricao">Descrição do Serviço</label>
                    </div> 

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="preco" id="preco" required minlength="1" maxlength="50" placeholder="Preço do Serviço">
                        <label for="preco">Preço (R$)</label>
                    </div>   
                    
                                
                    <div class="col-lg-3 mx-auto">
                        <input class="btn btn-secondary rounded align-middle w-100 mt-3 mb-5" type="submit" value="Enviar">
                    </div>
         
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection