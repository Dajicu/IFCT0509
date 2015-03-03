<?php include '_header.php'  ?>

<!-- 	<div class="container">
		<div class="well well-sm text-center">Login</div>
	</div>

	<div class="col-md-offset-5 col-md-3 well aling-center">
		<form action="procesadatos.php" method="post">
			usuario: <input type="text" name="usuario" value="" /><br>
			password: <input type="password" name="password" value="" /><br>
			<br>
			<input type="submit" name="submit" value="enviar" />
		</form>
	</div> -->


	<div class="row">	
		<div class="col-md-offset-5 col-md-2">
		<form action="procesadatos.php" method="post">
			<div class="form-login">
				 <h4>Identifíquese</h4>
				 <input type="text" name="usuario"  value="" class="form-control input-sm chat-input" placeholder="usuario" />
				 </br>
				 <input type="password" name="password"  value="" class="form-control input-sm chat-input" placeholder="password" />
				 </br>
				 <div class="wrapper">
				 <span class="group-btn">     
				   	<!-- <a href="procesadatos.php" class="btn btn-warning btn-md">login <i class="fa fa-sign-in"></i></a> -->
				  <!--  	<input type="submit" name="submit" value="enviar" /> --><button type="submit" class="btn btn-warning">Ir</button>
				 </span>
				 </div>
			</div>
		</form>	
		</div>	
<?php include '_footer.php' ?>