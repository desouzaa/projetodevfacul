
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

                {% if msg %}
                <div class="alert alert-danger text-center mx-auto" role="alert">{{msg}}</div>
                {% elif msg2 %}
                <div class="alert alert-success text-center mx-auto" role="alert">{{msg2}}</div>
                {% endif %}

                <form  id="form_cadastro" method="POST" action="/salvardadoseditados/"> 
            
                    {% csrf_token %}
                                  
                    <input name="idd" type="hidden" readonly value="{{clientedados.id_cliente}}">
                    <h2 class="mb-4" style="text-align: center;">Editar Dados</h2>
                    
                                    
                    <div class="form-floating mb-3">
                        <input type="text" value="{{clientedados.nome_completo}}" class="form-control" name="nome_completo" id="nome" required minlength="2" maxlength="50" placeholder="Nome Completo">
                        <label for="nome">Nome Completo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input readonly type="text" value="{{clientedados.cpf}}" class="form-control" name="cpf" id="cpf" minlength="2" maxlength="50" placeholder="cpf">
                        <label for="cpf">CPF (Não é possível editar o CPF)</label>
                    </div>

                    <div class="col-lg-3 mx-auto">
                        <input class="btn btn-secondary rounded align-middle w-100 mt-3 mb-5" type="submit" value="Enviar">
                    </div>
         
                    </form>
            </div>
        </div>
    </div>
</div>

{% endblock content %}
{% block script %}

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


{% endblock script %}