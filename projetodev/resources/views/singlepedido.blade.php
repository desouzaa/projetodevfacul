@extends('layouts.main')
@section('title', 'Home')
@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
        <div class="card shadow-lg-none">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-3 p-lg-5 p-md-5">
          
            
            <h1 class="mb-4" style="text-align: center;"><strong>Pedido: {{$pedidos->id}} - {{$pedidos->client->nome_completo}}</strong></h1>
            
        
                
            <div class="shadow-lg-lg">
                <div class="card shadow-lg-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dados</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text fw-bold">ID Cliente/Tutor:<strong>  {{$pedidos->client->id}} - {{$pedidos->client->nome_completo}}<strong></p>
                        <p class="card-text">CPF: <strong>  {{$pedidos->client->cpf}}</strong></p>
                        <p class="card-text">Data do Pedido: <strong>  {{$pedidos->data}}</strong> </p>
                        
                        <p class="card-text">Nome do Pet: <strong>  {{$pedidos->pet->nome_pet}}</strong> </p>
                                                
                        <H1 class="text-center fw-bold fs-3 mb-5">ITENS</H1>

                         <ol class="list-group list-group-numbered">
                         @forelse($itens as $iten)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">{{$iten->servico->servico}}</div>
                            <STRong>Valor unitário: </STRong> R$ {{$iten->preco_unitario}}
                            <br> 
                            <STRong>Desconto: </STRong> R$ {{$iten->desconto}} 
                            
                            </div>
                            <span class="badge bg-primary rounded-pill">QTD: {{$iten->qtd}}</span>
                        </li>
                        @empty
                        <h1>Nenhum item</h1>
                        @endforelse
                        </ol>

                        <H1 class="text-start fw-bold fs-3 mb-5 mt-5">Valor Total Pedido: R$ {{$totalvalorfim}}</H1>



                        
                    </div>
                </div>
            </div>


         


            <form action="/excluircliente/{{$pedidos->id}}" method="POST">
                      @csrf
                      @method('DELETE')
            <div class="d-flex flex-row-reverse text-center"> 
                <button  class="w btn btn-danger mt-5 mb-2" type="submit" onclick="return confirm('Tem certeza que deseja deletar este cliente?')">Excluir Cliente</button>
                
            </div>
            </form>




            </div>
        </div>
    </div>
</div>

@endsection