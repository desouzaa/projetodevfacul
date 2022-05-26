
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

              

                <form  id="form_cadastro" method="POST" action="/salvartelefone"> 
            
                    @csrf
                                  
                    <input name="idd" type="hidden" readonly value="{{$cliente->id}}">
                                                 
                
                    <h2 class="mb-4" style="text-align: center;">Novo Telefone</h2>
                    <div class="form-floating mb-3">
                        
                        <input placeholder="Digite somente números" type="text"
                        id="telefone" name="telefone" required minlength="14" maxlength="15" onkeypress="mascara(this)" class="form-control" >
                        <label for="telefone" >Telefone</label>
                        </div>
                    
                    
                   
                    <div class="col-lg-3 mx-auto">
                        <input class="btn btn-secondary rounded align-middle w-100 mt-3 mb-5" type="submit" value="Enviar">
                    </div>
         
                    </form>
            </div>
        </div>
    </div>
</div>



<script>
    
	function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
 
            if(telefone.value.length == 10)
                telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
  
}

</script>
@endsection