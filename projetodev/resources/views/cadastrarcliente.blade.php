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

                <form  id="form_cadastro" method="POST" action="/salvarcliente">             
                    @csrf
                    <h2 class="mb-4" style="text-align: center;">Novo Cliente</h2>
                   
                                 
                    <label style="font-weight: bolder;" class="form-label">INFORMAÇÕES PESSOAIS</label>
                
                
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nome_completo" id="nome" required minlength="2" maxlength="50" placeholder="Nome Completo">
                        <label for="nome">Nome Completo</label>
                    </div>
    
                    <div class="form-floating mb-3">
                        <input onblur="verificarCPF(this.value)" value="" type="text" placeholder="Digite apenas números *Preencha corretamente, pois não poderá ser alterado depois" name="cpf" id="cpf" minlength="11" maxlength="11" required class="form-control" aria-label="CPF" >
                        <label for="cpf" id="msgcpf">CPF</label>
                    </div>
                
                          
                    <div class="form-floating mb-3">
                        
                        <input placeholder="Digite somente números" type="text"
                        id="telefone" name="telefone" required minlength="14" maxlength="15" onkeypress="mascara(this)" class="form-control" >
                        <label for="telefone" >Telefone</label>
                        </div>
                    
                                
                    <div class="form-floating mb-3">
                                            
                        <input value="" placeholder="Insira somente números"  type="text" name="cep" id="cep" required minlength="8" maxlength="8" onblur="pesquisacep(this.value);" class="form-control" >
                        <label for="cep">CEP</label>
    
                    </div>
    
                    <div class="form-floating mb-3">
                        
                        <input type="text" name="rua" id="rua" required minlength="2" maxlength="50" placeholder="Rua" class="form-control" >
                        <label for="rua">Rua</label>
                    </div>
    
                    <div class="form-floating mb-3">
                        
                        <input type="text" id="numero" name="numero" required maxlength="10" class="form-control" placeholder="Número" >
                        <label for="numero">Número</label>
                    </div>
                    <div class="form-floating mb-3">
                    
                        <input type="text" name="bairro" id="bairro" minlength="2" maxlength="50" required class="form-control" placeholder="Bairro" >
                        <label for="bairro">Bairro</label>
                        
                    </div>
    
                    
    
                    <div class="form-floating mb-3">
                        
                        <input type="text" id="cidade" name="cidade" required minlength="2" maxlength="50" class="form-control" placeholder="Cidade" >
                        <label for="cidade">Cidade</label>
                    </div>
    
                  
    
                    <div class="form-floating mb-3">
                        
                        <input type="text" id="uf" name="uf" required minlength="2" maxlength="30" class="form-control" placeholder="Estado" >
                        <label for="uf">Estado</label>
                    </div>
                
                                        
                    <div class="form-floating mb-3">
                        
                        <input required placeholder="Complemento" type="text" name="complemento1" id="complemento1"  maxlength="50" class="form-control" >
                        <label for="complemento1">Complemento</label>
                    </div>
                   
                    <div class="col-lg-3 mx-auto">
                        <input class="btn btn-secondary rounded align-middle w-100 mt-3 mb-5" type="submit" value="Enviar">
                    </div>
         
                    </form>
            </div>
        </div>
    </div>
</div>


<!-- script para verificar cpf -->
<script>   
	function verificarCPF(c){
    
    if (c.length != 11 || 
    cpf == "00000000000" || 
    cpf == "11111111111" || 
    cpf == "22222222222" || 
    cpf == "33333333333" || 
    cpf == "44444444444" || 
    cpf == "55555555555" || 
    cpf == "66666666666" || 
    cpf == "77777777777" || 
    cpf == "88888888888" || 
    cpf == "99999999999"){
    document.getElementById('cpf').value=("");
    var myElement = document.getElementById("cpf");
    myElement.setAttribute('style', 'border-color: red');
    var myElement2 = document.getElementById("msgcpf");
    myElement2.innerHTML="CPF Inválido"
    myElement2.setAttribute('style', 'color: red')
    return false
    }
    
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
 
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }

    
    if (d1 == 0){
        v = true;
        document.getElementById('cpf').value=("");
        var myElement = document.getElementById("cpf");
        myElement.setAttribute('style', 'border-color: red');
        myElement.setAttribute('style', 'color: red') 
        var myElement2 = document.getElementById("msgcpf");
        myElement2.innerHTML="CPF Inválido"
        myElement2.setAttribute('style', 'color: red')
        return false;
    }

    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        v = true;
        document.getElementById('cpf').value=("");
        var myElement = document.getElementById("cpf");
        myElement.setAttribute('style', 'border-color: red');
        myElement.setAttribute('style', 'color: red') 
        var myElement2 = document.getElementById("msgcpf");
        myElement2.innerHTML="CPF Inválido"
        myElement2.setAttribute('style', 'color: red')
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        v = true;
        document.getElementById('cpf').value=("");
        var myElement = document.getElementById("cpf");
        myElement.setAttribute('style', 'border-color: red');
        myElement.setAttribute('style', 'color: red') 
        var myElement2 = document.getElementById("msgcpf");
        myElement2.innerHTML="CPF Inválido"
        myElement2.setAttribute('style', 'color: red')
        return false;
    }
    if (!v) {
    
        
        var myElement = document.getElementById("cpf");
        myElement.setAttribute('style', 'border-color: green');
        myElement.setAttribute('style', 'color: green') 
        var myElement2 = document.getElementById("msgcpf");
        myElement2.innerHTML="CPF"
        myElement2.setAttribute('style', 'color: green')
    }

}
</script>

<!-- Script para buscar endereço pelo CEP -->
<script>

function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
               

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>

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