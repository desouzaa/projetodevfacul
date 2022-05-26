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
                <h2 class="mb-4" style="text-align: center;">Clientes Cadastrados</h2>
            @if(session('msg'))   
            <div id="msg" class="alert alert-success text-center mx-auto" role="alert">{{session('msg')}}</div>
            @endif
            @if(session('msg2'))   
            <div id="msg" class="alert alert-danger text-center mx-auto" role="alert">{{session('msg2')}}</div>
            @endif
            <div class="table-responsive">
            <table id="tableclientes" class="table table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ver</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                @forelse($clientes as $cliente)
                  <tr>
                    <th scope="row">{{$cliente->id}}</th>
                    <td>{{$cliente->nome_completo}}</td>
                    <td>{{$cliente->cpf}}</td>
                    <td><a href="/singlecliente/{{$cliente->id}}" class="btn btn-secondary">Ver</a></td>
                    
                
                    
                  </tr>
                   @empty
                  <tr><td colspan="4"> Nenhum Cliente cadastrado</td></tr>
                  @endforelse
                  
                </tbody>
              </table>
            </div>
            <div class="mxauto text-center mt-5"><a class="btn btn-secondary" href="/cadastrarcliente">Cadastrar Novo Cliente</a></div>
            </div>
        </div>
    </div>
</div>


<script>
	$(document).ready( function () {
		$('#tableclientes').DataTable({
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