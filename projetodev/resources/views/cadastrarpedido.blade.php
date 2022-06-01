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

                <form onsubmit="return confirm('Deseja finalizar o pedido?')" id="form_cadastro" method="POST" action="/salvarpedido"> 
            @csrf
                   
                    <h2 class="mb-4" style="text-align: center;">Novo Pedido</h2>
                   
                    <label style="font-weight: bolder;" class="form-label">INFORMAÇÕES</label>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="data" id="data" required placeholder="Data do pedido">
                        <label for="data">Data do Pedido</label>
                    </div>   
                    
                    <div class="input-group mb-3">
                        <select required class="form-select js-example-basic-single" name="cliente" id="cliente">
                            <option selected selected="" value="">Selecionar Cliente</option>
                         @forelse($clientes as $cliente)
                            <option value="{{$cliente->id}}">Cod: {{$cliente->id}} - Nome: {{$cliente->nome_completo}}</option>
                          @empty
                            <option disabled value="">Nenhum Cliente/Tutor cadastrado</option>
                           @endforelse
                        </select>
                        
                    </div>  

                    <div class="input-group mb-3">
                        <select required class="form-select js-example-basic-single" name="pet" id="pet">
                            <option selected selected="" value="">Selecionar Pet</option>
                            @forelse($pets as $pet)
                            <option value="{{$pet->id}}">Cod: {{$pet->id}} - Nome: {{$pet->nome_pet}}</option>
                            @empty
                            <option disabled value="">Nenhum Pet cadastrado</option>
                            @endforelse
                        </select>
                      
                    </div>   

        
                    
                                                            
                    <!-- Itens -->
            <div class="tab-pane active mt-4" id="itens">

                <div class="row mt-4">
                    <div class="col-md-12 mt-4">
                        <a href="javascript:;" onclick="novoItem();" class="btn btn-primary">
                            Novo item (+)
                        </a>
                    </div>                                        
                </div>                                                    
                
                <div class="table-responsive">

                    <div id="" class="">
                        <table id="tbservico" class="table table-striped " cellspacing="0" width="100%" style="margin: 10px 0px 10px 0px;" role="grid">

                    <thead>
                        <tr role="row">
                            <th tabindex="0" aria-controls="tb_itens" rowspan="1" colspan="1" style="width: 40%;" >Serviço
                            </th>
                            <th tabindex="0" aria-controls="tb_itens" rowspan="1" colspan="1" >Quantidade</th>
                            <th tabindex="0" aria-controls="tb_itens" rowspan="1" colspan="1">Preço</th>
                            
                            <th tabindex="0" aria-controls="tb_itens" rowspan="1" colspan="1" aria-label="% Desconto: Ordenar colunas de forma ascendente">Desconto(R$)</th>
                            <th tabindex="0" aria-controls="tb_itens" rowspan="1" colspan="1" aria-label="Valor Total: Ordenar colunas de forma ascendente">Valor Total(R$)</th>                                        
                            <th class="text-center" rowspan="1" colspan="1" aria-label="Ações">Ações</th>
                        </tr>
                    </thead>

                        <tbody>
                         
                        </tbody>

                    </table>
                </div>

                </div>



                <script>
                    function novoItem(){
                     
                    var table = document.getElementById('tbservico')
                    var numerolinha = 1;
                    var idlinha = 0;

                    var qtdlinha = ($('#tbservico tr').length);
           

                    if(qtdlinha<=1){

                        idlinha = 1;

                    }else{

                        idlinha = parseInt($('#idlinha').val()) + 1
                        
                    }
                    var linha = table.insertRow(numerolinha);
                    var celula1 = linha.insertCell(0);
                    var celula2 = linha.insertCell(1);
                    var celula3 = linha.insertCell(2);
                    var celula4 = linha.insertCell(3);
                    var celula5 = linha.insertCell(4);
                    var celula6 = linha.insertCell(5);
                    var celula7 = linha.insertCell(6);

                    celula1.innerHTML = "<div id='' style='min-width: 200px; width: 98%;'><input id='idlinha' type='hidden' value='"+idlinha+"'><select onchange='mostrardados(this.value, "+idlinha+")' required class='form-select js-example-basic-single' name='servico"+idlinha+"' id='servico"+idlinha+"'><option selected selected='' value=''>Selecionar Serviço/Produto</option>@forelse($servicos as $servico)   <option value='{{$servico->preco}}'>{{$servico->servico}}</option>@empty<option disabled value=''>Nenhum Serviço/Produto cadastrado</option>@endforelse</select></div>"

                    celula2.innerHTML = '  <input required onchange="alterarqtd(this.value, '+idlinha+')" type="number" class="form-control" readonly id="quantidade'+idlinha+'" name="quantidade'+idlinha+'" style="width: 100%; min-width: 70px;" >'

                    celula3.innerHTML = '<input required type="number"  class="form-control decimal" readonly id="preco'+idlinha+'" name="preco'+idlinha+'" style="width: 100%; min-width: 70px;">'

                    celula4.innerHTML = '    <input required value="0" onchange="alterardesconto(this.value, '+idlinha+')" readonly step="0.50" type="number" class="form-control decimal" id="descontoitem'+idlinha+'" name="descontoitem'+idlinha+'" style="width: 100%; min-width: 70px;">'

                    celula5.innerHTML = ' <input required type="text" class="form-control decimal somatoria" id="totalitem'+idlinha+'" name="totalitem'+idlinha+'" readonly="true" tabindex="-1" value="" style="width: 100%; min-width: 70px;">'

                    celula6.innerHTML = '<button  onclick="removerLinha($(this));" type="button" class="btn btn-danger btn-xs">X</button>'

                    celula7.innerHTML = '<input value="{{$servico->id}}" readonly type="hidden" class="form-control decimal" id="servicoo'+idlinha+'" name="servicoo'+idlinha+'" style="width: 100%; min-width: 70px;">'

                    $('#qtddelinha').val(idlinha)
                    
                    }
                    
                    function atualizartotal(){
                        var valorCalculado = 0;

                        $( ".somatoria" ).each(function() {
                        valorCalculado += parseFloat($( this ).val());
                        });
                        $( "#total_pedido" ).text(valorCalculado);

                        

                    }

                    function mostrardados(servico, linha){
                    var vtotal = parseFloat($('#total_pedido').text())
                    $('#quantidade'+linha+'').removeAttr('readonly')
                    $('#descontoitem'+linha+'').removeAttr('readonly')
                    $('#quantidade'+linha+'').val(01)
                    $('#preco'+linha+'').val(servico)
                    $('#totalitem'+linha+'').val(servico)
                    vtotal += parseFloat(servico)
                    $('#total_pedido').html(vtotal)
                    atualizartotal()
                    }

                    function alterarqtd(qtd, linha){
                    
                    var valortotal = (qtd * $('#preco'+linha+'').val()) - $('#descontoitem'+linha+'').val()
                    $('#totalitem'+linha+'').val(valortotal)

                    var vtotal = parseFloat($('#total_pedido').text())
                    
                    atualizartotal()
                    }

                    function alterardesconto(desc, linha){
                                                    
                    var valortotal = ($('#quantidade'+linha+'').val() * $('#preco'+linha+'').val()) - desc
                    $('#totalitem'+linha+'').val(valortotal)
                        
                    atualizartotal()
                    }

                    function removerLinha(elemento){

                        
                        if(confirm('Tem certeza que deseja deletar este tamanho?') == true){
                            var objTr = $(elemento).parent('td').parent('tr');                        
                            objTr.remove()
                            atualizartotal()
                        }else{
                            return false
                        }
                        
                    }
                
                </script>


                <div class="row mt-5">

                            
                    <div class="col-md-12">
                        <em>
                            <p class="text-info text-right">Valor Total: R$ <span id="total_pedido">0</span></p>
                            
                        </em>
                    </div>

                </div>

            </div>

              
        
                <input id="qtddelinha" name="qtddelinha" type="hidden" readonly value="">
                <div class="col-lg-3 mx-auto mt-5">
                    
                    <input class="btn btn-secondary rounded align-middle w-100 mt-3 mb-5" type="submit" value="Enviar">

                    </form>
            </div>
        </div>
    </div>
</div>


                                   
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    });
     </script>

@endsection