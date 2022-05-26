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
                <h2 class="mb-4" style="text-align: center;">Pets Cadastrados</h2>
                
            @if(session('msg'))   
            <div id="msg" class="alert alert-success text-center mx-auto" role="alert">{{session('msg')}}</div>
            @endif
            @if(session('msg2'))   
            <div id="msg" class="alert alert-danger text-center mx-auto" role="alert">{{session('msg2')}}</div>
            @endif
    

            <div class="table-responsive">
            <table id="tablepets" class="overflow-y table table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Ver</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse($pets as $pet)
                  <tr>
                    <th scope="row">{{$pet->id}}</th>
                    <td>{{$pet->nome_pet}}</td>
                    <td>{{$pet->id_cliente}}</td>
                    <td><a class="btn btn-secondary" href="/singlepett/{{$pet->id}}">Ver</a></td>
                    
                    
                    
                  </tr>
                  
                   @empty
                  <tr><td colspan="4"> Nenhum Pet Cadastrado</td></tr>
               
                  @endforelse
                </tbody>
              </table>
            </div>

            <div class="mxauto text-center mt-5"><a class="btn btn-secondary" href="/cadastrarpet">Cadastrar Novo Pet</a></div>
            </div>
        </div>
    </div>
</div>


<script>
	$(document).ready( function () {
		$('#tablepets').DataTable({
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