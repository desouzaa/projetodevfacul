@extends('layouts.main')
@section('title', 'Home')
@section('content')


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
        <div class="card shadow-none">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-2 p-lg-5 p-md-5">
                <h2 class="mb-4" style="text-align: center;">Pagamentos Cadastrados</h2>
     
            <div id="msg" class="alert alert-danger text-center mx-auto" role="alert"></div>
        
            <div id="msg2" class="alert alert-success text-center mx-auto" role="alert"></div>
         

            <div class="table-responsive">
            <table id="tableservicos" class="table table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ver</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                @forelse($pagamentos as $pagamento)
                  <tr>
                    <th scope="row">{{$pagamento->id}}</th>
                    <td>{{$pagamento->id}}</td>
                    <td>{{$pagamento->id}}</td>
                    <td><a onclick="return confirm('Tem certeza que deseja deletar esta pelagem?')" href="/excluirpagamento?id={{$pagamento->id}}" class="btn btn-danger">Excluir</a></td>
                    
                    
                    
                  </tr>
                   @empty
                  <tr><td colspan="4"> Nenhum pagamento cadastrado</td></tr>
         
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="mxauto text-center mt-5"><a class="btn btn-secondary" href="/cadastrarpagamento">Cadastrar Novo Pagamento</a></div>
            </div>
        </div>
    </div>
</div>


<script>
	$(document).ready( function () {
		$('#tableservicos').DataTable({
      language: {
        
        decimal: ",",
        processing:     "Processando...",
        search:         "Buscar:",
        lengthMenu:    "Exibir _MENU_ registros",
        info:           "Exibindo _START_ de _END_ registros de um total de _TOTAL_ ",
        infoEmpty:      "Exibindo 0 de 0 registros de um total de 0",
        infoFiltered:   "(Filtrando de _MAX_ registros encontrados)",
        infoPostFix:    "",
        loadingRecords: "Carregando...",
        zeroRecords:    "Nenhum registro encontrado",
        emptyTable:     "Nenhum registro cadastrado",
        paginate: {
            first:      "Primeira",
            previous:   "Anterior",
            next:       "Próxima",
            last:       "Última"
        },
      
    }



    });
	} );</script>
@endsection