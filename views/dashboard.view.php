<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styledashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<!-- Barra principal -->
	<nav class="navbar bd-navbar navbar-expand-lg navbar-dark bg-admin">
		<a href="#" class="navbar-brand">Administración Shuffle</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		 data-target="#navegacion">
		 	<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navegacion">
			<div class="container"><!--Procedo a usar la grid de boostrap -->
				<div class="col"><!-- Columnas -->
					<!--Barra de busqueda -->
					<form action="#" class="my-2 my-lg-0">
						<input class="form-control" type="search" placeholder="Buscar...">
					</form><!-- Barra de busqueda -->
				</div><!--col-->
			</div><!--Container --> 	
		</div><!--Collapse -->
	</nav>
	<!-- barra lateral -->
	<aside class="bg-dark p-4">
		<h3 class="text-light text-center">Navegación</h3>
		<ul class="nav flex-column mt-5"><!--Para que sea lateral -->
			<li class="nav-item">
			<a href="#" class="nav-item text-light d-flex align-items-center"><!--align-items-center es 
				para que este alineado con el icono -->
				<!-- Agrego los iconos de materialize -->
				<i class="material-icons mr-2">contacts</i>
				Asitentes
			</a>
			</li>
			<!--Entradas vendidas -->
			<li class="nav-item">
			<a href="#" class="nav-item text-light d-flex align-items-center mt-2"><!--align-items-center es 
				para que este alineado con el icono -->
				<!-- Agrego los iconos de materialize -->
				<i class="material-icons mr-2">attach_money</i>
				Ventas
			</a>
			</li>
		</ul><!--UL-->
	</aside><!-- aside -->
	<!-- Pagina central, asistentes-->
	<main class="pt-4">
		<div class="container">
			<h2 class="text-center mb-4">Administración de asistentes</h2>
			<div class="row text-center panel justify-content-center align-middle"><!--Para centrarlo verticalmente -->
				<div class="col-md-6 col-lg-3 col-12">
					<!-- Centro el contenido del boton -->
					<div class="boton bg-success d-flex align-items-center justify-content-center">
						<a href="nuevo-asistente.html" class="text-light">
							<i class="material-icons">add</i>
							<p class="m-0">Nuevo</p>
						</a>
					</div><!-- boton -->
				</div><!-- Col -->
			</div><!--row -->
			<h3 class="text-center mt-4">Lista de asistentes</h3>
			<!-- Agrego la tabla -->
			<table class="table mt-3">
				<caption>Listado actualizado.....</caption>
				<thead>
					<tr>
						<th scoper="col">Cedula</th>
						<th scoper="col">Nombre</th>
						<th scoper="col">Apellido</th>
						<th scoper="col">Entradas</th>
						<th scoper="col">Acciones</th>
					</tr>
				</thead>
				<!--Datos de prueba -->
				<tbody>
					<tr>
						<td>1111111</td>
						<td>Cossette</td>
						<td>Torres</td>
						<td>2</td>
						<td>
							<a href="#" class="btn btn-danger">Borrar</a>
							<a href="#" class="btn btn-success">Editar</a>
							<a href="#" class="btn btn-primary">Aprobar</a>
						</td>
					</tr>

					<tr>
						<td>2444505</td>
						<td>Andherson</td>
						<td>Palacio</td>
						<td>7</td>
						<td>
							<a href="#" class="btn btn-danger">Borrar</a>
							<a href="#" class="btn btn-success">Editar</a>
							<a href="#" class="btn btn-primary">Aprobar</a>
						</td>
					</tr>

					<tr>
						<td>10333393</td>
						<td>Juan</td>
						<td>Cardenas</td>
						<td>5</td>
						<td>
							<a href="#" class="btn btn-danger">Borrar</a>
							<a href="#" class="btn btn-success">Editar</a>
							<a href="#" class="btn btn-primary">Aprobar</a>
						</td>
					</tr>

				</tbody>
				
			</table><!--tabla-->

		</div><!-- Container -->	
	</main><!-- Seccion principal -->


</body>
</html>