<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Sistema admin responsivo &amp;">
	<meta name="author" content="Rafael de Souza">
	<!-- Titulo -->
	<title>@yield('title')</title>
	<!-- fim Titulo -->

	<!-- Favicon -->
	<link rel="shortcut icon" href="">
	<!-- fim Favicon -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-cards.html">
	<link href="/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	
	
	<script src="/js/app.js"></script>

</head>

	
	
<body onload="quadro()" >
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar ">

			<div class="sidebar-content js-simplebar bg-dark text-white">
				<a class="sidebar-brand text-dark" href="">
					<span class="align-middle text-center text-white mx-auto">Hounds banho e tosa</span>
				</a>
				<!-- CONTEUDO SIDEBAR -->
				<ul class="sidebar-nav bg-dark text-dark mt-0">
					

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/index">
							<i class="align-middle bg-dark text-muted" data-feather="sliders"></i> <span
								class="align-middle bg-dark text-muted">Dashboard</span>
						</a>
					</li>

				
					</li>

					<li class="sidebar-header bg-dark text-muted">
						Pedidos e agendamentos
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/pedidosfinalizados">
							<i class="align-middle bg-dark text-muted" data-feather="check-square"></i> <span
								class="align-middle bg-dark text-muted">Pedidos Finalizados</span>
						</a>
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/cadastrarpedido">
							<i class="align-middle bg-dark text-muted" data-feather="file-plus"></i> <span
								class="align-middle bg-dark text-muted">Novo Pedido</span>
						</a>
					</li>

					
					<!-- <li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="">
							<i class="align-middle bg-dark text-muted" data-feather="trending-up"></i> <span
								class="align-middle bg-dark text-muted">Relatórios</span>
						</a>
					</li> -->

					<li class="sidebar-header bg-dark text-muted">
						Pagamentos
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/pagamentos">
							<i class="align-middle bg-dark text-muted" data-feather="dollar-sign"></i> <span
								class="align-middle bg-dark text-muted">Pagamentos</span>
						</a>
					</li>

					<li class="sidebar-header bg-dark text-muted">
						Serviços
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/servicos">
							<i class="align-middle bg-dark text-muted" data-feather="package"></i> <span
								class="align-middle bg-dark text-muted">Serviços</span>
						</a>
					</li>

					<li class="sidebar-header bg-dark text-muted">
						Clientes
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/clientes">
							<i class="align-middle bg-dark text-muted" data-feather="users"></i> <span
								class="align-middle bg-dark text-muted">Clientes</span>
						</a>
					</li>

					

					<li class="sidebar-header bg-dark text-muted">
						Pets
					</li>

					

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/pets">
							<i class="align-middle bg-dark text-muted" data-feather="gitlab"></i> <span
								class="align-middle bg-dark text-muted">Pets</span>
						</a>
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/racas">
							<i class="align-middle bg-dark text-muted" data-feather="plus-circle"></i> <span
								class="align-middle bg-dark text-muted">Raças</span>
						</a>
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/tamanhos">
							<i class="align-middle bg-dark text-muted" data-feather="maximize-2"></i> <span
								class="align-middle bg-dark text-muted">Tamanhos</span>
						</a>
					</li>

					<li class="sidebar-item bg-dark text-muted">
						<a class="sidebar-link bg-dark text-muted" href="/pelagens">
							<i class="align-middle bg-dark text-muted" data-feather="plus-square"></i> <span
								class="align-middle bg-dark text-muted">Pelagens</span>
						</a>
					</li>

				</ul>
				<!-- FIM CONTEUDO SIDEBAR -->

				
				 <div class="sidebar-cta bg-dark">
					<div class="sidebar-cta-content bg-light">
						<strong class="d-inline-block mb-2 text-muted">Gangland Tech</strong>
						<div class="mb-3 text-sm text-muted">
							Área administrativa 
						</div>
						<div class="d-grid">
							<a href="" class="btn btn-dark text-light">Acessar minha conta</a>
						</div>
					</div>
				</div>
			
			 </div> 



		</nav>

		<!-- Navbar no header -->
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg shadow-none">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-dark fw-bold fs-3">{{auth()->user()->name}}</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
															
								
								<a class="dropdown-item" href="/logout"><button class="btn-warning w-100 border-0">Sair</button></a>
							</div>
						</li>

				

					</ul>
				</div>
			</nav>




			<main class="content" style="background-color: white;">
				<div class="container-fluid p-0 " >



				@yield('content')







				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://www.linkedin.com/in/rafael-de-souza-7a96a41a6"
									target="_blank"><strong>Gangland Tech</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://www.linkedin.com/in/rafael-de-souza-7a96a41a6" target="_blank">Suporte</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- Navbar no header -->


	</div>


</body>


<script>
		function quadro(){                 
	  
			setTimeout(function() {
			 $('#msg').fadeOut('slow');
			}, 2500);
			

			setTimeout(function() {
			 $('#msg2').fadeOut('slow');
			}, 2500);
			}

			

	</script>
</html>