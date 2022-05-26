@extends('layouts.main')
@section('title', 'Pedidos Finalizados')
@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
        <div class="card shadow-none" >
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-2 p-lg-5 p-md-5">
                <h2 class="mb-4" style="text-align: center;">Pedidos Finalizados</h2>

         
            <div id="msg" class="alert alert-danger text-center mx-auto" role="alert"></div>
          
            <div id="msg2" class="alert alert-success text-center mx-auto" role="alert"></div>
       

            <div class="table-responsive">
            <table id="tablepedidos" class="table table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ver</th>
                    
                    
                  </tr>
                </thead>
                <tbody>

                
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td><a href="" class="btn btn-secondary">Ver</a></td>
                    
                    
                    
                  </tr>
               
                  <tr><td colspan="4"> Nenhum Pedido realizado</td></tr>
          
                </tbody>
              </table>
            </div>
            <div class="mxauto text-center mt-5"><a class="btn btn-secondary" href="/cadastrarpedido">Cadastrar Novo Pedido</a></div>
            </div>
        </div>
    </div>
</div>


<script>
	$(document).ready( function () {
		$('#tablepedidos').DataTable();
	} );</script>
@endsection