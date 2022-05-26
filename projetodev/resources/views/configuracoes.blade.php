@extends('layouts.main')
@section('title', 'Configurações')
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
        <div class="card shadow-none">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body p-xs-0 p-sm-3 p-lg-5 p-md-5">
                <h2 class="mb-4" style="text-align: center;">Configurações</h2>
           
            <div class="alert alert-danger text-center mx-auto" role="alert"></div>
            
            <div class="alert alert-success text-center mx-auto" role="alert"></div>
         

            <div class="col-12 shadow-lg">
							<div class="card shadow-lg">
								<div class="card-header">
									<h5 class="card-title mb-0">Alterar Senha</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Clique no botão abaixo para alterar a senha</p>
									<a href="/alterarsenha" class="btn btn-secondary">Alterar senha</a>
								</div>
							</div>
						</div>

            </div>
        </div>
    </div>
</div>

@endsection