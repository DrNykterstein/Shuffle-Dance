<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>

<body class="h-100 login">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center">
			<div class="col-md-7">
				<div class="contenido p-5 bg-light">
					<h2 class="text-center bg-primary text-light text-uppercase py-2">Login</h2>
					<div id="login-form">
						<form class="mt-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login"><!--Margin top -->
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" :class="['form-control',classemail]" id="email" placeholder="Introduzca su email" v-model="email" @change="emailvalido(email)">
							</div><!-- Form group -->

							<div class="form-group">
								<label for="password">Contraseña</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Introduzca su password" v-model="pass">
							</div><!-- Form group -->
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="remember" v-model="remember">
								<label for="password">recordar</label>
							</div><!-- Form check -->

							<button class="mt-4 btn btn-primary" @click="iniciar(email,pass)" onclick="login.submit()">Iniciar sesion</button>


							<!-- Modal -->
								<div class="modal fade" id="errmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-body" style="color:#81004b;">
								      {{err_men}}
								      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
								      </div>
								      <div class="modal-footer">
								        
								      </div>
								    </div>
								  </div>
								</div>
							<br><br>	
							<?php if(!empty($errores)): ?>
								<div class="error">
									<ul>
										<?php echo $errores; ?>
									</ul>
								</div>
							<?php endif; ?>
						</form><!--Formulario -->
					</div><!--Contenedor de componente login-form-->
				</div>
				
			</div><!--Col -->
			
		</div><!--row -->
		
	</div><!--Container -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="js/login.js"></script>
</body>
</html>