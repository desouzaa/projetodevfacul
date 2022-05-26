@extends('layouts.main')
@section('title', 'Alterar Senha')
@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
        <div class="card shadow-none">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-3 p-lg-5 p-md-5">
            <h2 class="mb-4" style="text-align: center;">Alterar senha</h2>

             <div id="msg" class="alert alert-danger text-center mx-auto" role="alert"></div>
       
            <div id="msg2" class="alert alert-success text-center mx-auto" role="alert"></div>
     

            <div id="msgsenha" class="alert alert-danger d-none"></div>
            <div id="msgsenha2" class="alert alert-success d-none"></div>
               


            <form  id="form_cadastro" method="POST" action="/salvarsenhaalterada/"> 
            
               
                              
                <input name="idd" type="hidden" readonly value="">

                <div class="form-floating mb-3">
                    
                    <input placeholder="Digite sua senha atual" type="password"
                    id="senhaatual" name="senhaatual" required minlength="6" maxlength="30" class="form-control" >
                    <label for="senhaatual">Senha Atual</label>
                </div>

                <div class="form-floating mb-3">
                    
                    <input placeholder="Digite sua nova senha" type="password"
                    id="novasenha" name="novasenha" required minlength="6" maxlength="30" class="form-control" >
                    <label for="novasenha">Novas Senha</label>
                </div>

                <div class="form-floating mb-3">
                    
                    <input placeholder="Confirme sua nova senha" type="password"
                    id="novasenha2" name="novasenha2" required minlength="6" maxlength="30" class="form-control" onblur="verificarSenha()" >
                    <label for="novasenha2">Confirme sua Nova Senha</label>
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
    	function verificarSenha(){
	
	
    if ($('#novasenha').val() == $('#novasenha2').val()) {
        $('#novasenha').css('color', 'green');
        $('#novasenha2').css('color', 'green');
        $('#novasenha').css('border-color', 'green');
        $('#novasenha2').css('border-color', 'green');
        $('#msgsenha2').blade.php('Senhas conferem').removeClass('d-none')
        
        setTimeout(function() {
        $('#msgsenha2').fadeOut('slow');
        }, 2000);
        
        

    } else if($('#novasenha').val() != $('#novasenha2').val()){

        
        document.getElementById('novasenha').value=("");
        document.getElementById('novasenha2').value=("");
        $('#novasenha').css('border-color', 'red');
        $('#novasenha2').css('border-color', 'red');
        $('#msgsenha').blade.php('Senhas não conferem').removeClass('d-none')
        setTimeout(function() {
         $('#msgsenha').fadeOut('slow');
          }, 2000);
    }
}


</script>


@endsection