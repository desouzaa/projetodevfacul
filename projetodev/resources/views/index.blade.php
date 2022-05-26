@extends('layouts.main')
@section('title', 'Home')
@section('content')
<h1 class="h3 mb-3 text-center fs-2"><strong>Dashboard</strong></h1>

<div class="row">
	<div class="col-xl-6 col-xxl-6 d-flex mt-5">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Banhos realizados</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="droplet"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">2.382</h1>
							<div class="mb-0">
								<span class="text-danger"> <i
										class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
								<span class="text-muted">Desde última semana</span>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Clientes</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="users"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">14.212</h1>
							<div class="mb-0">
								<span class="text-success"> <i
										class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
								<span class="text-muted">Desde última semana</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Tosas realizadas</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="scissors"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">64</h1>
							<div class="mb-0">
								<span class="text-danger"> <i
										class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
								<span class="text-muted">Desde última semana</span>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Ganhos</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="dollar-sign"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">R$ 21.300</h1>
							<div class="mb-0">
								<span class="text-success"> <i
										class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
								<span class="text-muted">Desde última semana</span>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-6 col-lg-6 col-xxl-6 d-flex">
		<div class="card flex-fill">
			<div class="card-header">

				<h5 class="card-title mb-0">Últimos Serviços</h5>
			</div>
			<table class="table table-hover my-0">
				<thead>
					<tr>
						<th>Descrição</th>
						<th class="d-none d-xl-table-cell">Data</th>
						<th class="d-none d-md-table-cell">Cliente</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Banho</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						<td class="d-none d-md-table-cell">Vanessa Tucker</td>
					</tr>
					<tr>
						<td>Tosa</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
					
						<td class="d-none d-md-table-cell">William Harris</td>
					</tr>
					<tr>
						<td>Banho</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						<td class="d-none d-md-table-cell">Sharon Lessman</td>
					</tr>
					<tr>
						<td>Banho</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						<td class="d-none d-md-table-cell">Vanessa Tucker</td>
					</tr>
					<tr>
						<td>Banho e Tosa</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						<td class="d-none d-md-table-cell">William Harris</td>
					</tr>
					<tr>
						<td>Banho</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						<td class="d-none d-md-table-cell">Sharon Lessman</td>
					</tr>
					<tr>
						<td>Banho e Tosa</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						
						<td class="d-none d-md-table-cell">Christina Mason</td>
					</tr>
					<tr>
						<td>Banho</td>
						<td class="d-none d-xl-table-cell">01/01/2021</td>
						
						<td class="d-none d-md-table-cell">William Harris</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	

	

</div>







@endsection