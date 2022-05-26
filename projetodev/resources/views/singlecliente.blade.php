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
          
            
            <h1 class="mb-4" style="text-align: center;"><strong>{{$cliente->nome_completo}}</strong></h1>
            
        
                
            <div class="shadow-lg">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dados</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">ID Cliente: <strong>{{$cliente->id}}</strong></p>
                        <p class="card-text">CPF: <strong>{{$cliente->cpf}}</strong></p>
                        <p class="card-text">Cadastrado: <strong>{{$cliente->created_at}}</strong> </p>
                        <a href="" class="btn btn-secondary">Editar Dados</a>
                    </div>
                </div>
            </div>


            <h2 class="mb-4 mt-3" style="text-align: center;"><strong>Endereços</strong></h2>


          

            @forelse($enderecos as $endereco)
            <div class="shadow-lg">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{$endereco->rua}}, {{$endereco->numero}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>{{$endereco->rua}}, {{$endereco->numero}}, {{$endereco->bairro}}, {{$endereco->cidade}}, {{$endereco->uf}}, {{$endereco->cep}}</strong></p>
                       


                        <form action="/excluirendereco/{{$endereco->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                        <div class="d-flex flex-row text-center"> 
                            <button  class="w btn btn-danger mt-5 mb-2" type="submit" onclick="return confirm('Tem certeza que deseja deletar este cliente?')">Excluir Endereço</button>
                            
                        </div>
                        </form>


                    </div>
                </div>
            </div>
            @empty
            <div class="shadow-lg">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0"></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Nenhum endereço cadastrado</strong></p>
                        

                    </div>
                </div>
            </div>
            @endforelse

         


            <div class="mx-auto text-center mb-5">  <a href="/cadastrarend/{{$cliente->id}}" class="btn btn-secondary ">Cadastrar novo Endereço</a></div>


            <h2 class="mb-4 mt-5" style="text-align: center;"><strong>Telefones</strong></h2>

            @forelse($telefones as $telefone)
            <div class="shadow-lg">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0"></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>{{$telefone->numero_telefone}}</</strong></p>
                        

                        <form action="/excluirtelefone/{{$telefone->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                        <div class="d-flex flex-row text-center"> 
                            <button  class="w btn btn-danger mt-5 mb-2" type="submit" onclick="return confirm('Tem certeza que deseja deletar este cliente?')">Excluir Telefone</button>
                            
                        </div>
                        </form>

                    </div>
                </div>
            </div>

            @empty
            <div class="shadow-lg">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0"></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Nenhum telefone cadastrado</strong></p>
                        

                    </div>
                </div>
            </div>
            @endforelse
       

            <div class="mx-auto text-center mb-5"><a href="/cadastrartel/{{$cliente->id}}" class="btn btn-secondary ">Cadastrar novo Telefone</a></div>

            <form action="/excluircliente/{{$cliente->id}}" method="POST">
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