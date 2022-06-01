@extends('layouts.main')
@section('title', 'Home')
@section('content')
<h1 class="h3 mb-5 text-center fs-2"><strong>Dashboard</strong></h1>


<div class="row mt-5">
	<div class="col-xl-12 col-xxl-12 col-sm-12 col-12 d-flex mt-5 mt-3">
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
	

	

	

</div>







@endsection