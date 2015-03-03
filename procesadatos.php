<?php include "_header.php" ?>

	<div class="well well-sm text-center">procesadatos</div>

		<pre>
			<?php 
				print_r ($_POST);
				$usuario = $_POST["usuario"];
				$password = $_POST["password"];

				echo $usuario . " " . $password;
			 	echo date ("d-m-Y H:i:s"); 
			 	$nombre = $_POST["nombre"]; 
		    	$año = $_POST["añonacimiento"]; 
		    	$edad = date ("Y") - $_POST["añonacimiento"];	
		    	

		    	if (isset($_POST['enviar'])) {
   				//Si el checkbox condiciones tiene valor y es igual a 1
   				if (isset($_POST['condiciones']) && $_POST['condiciones'] == '1')
      				echo '<div style="color:green">Has aceptado correctamente las condiciones de uso.</div>';
   				else
      				echo '<div style="color:red">Debes aceptar las condiciones de uso.</div>';
				}
			 ?>
		    

			<p>Hoy es <?php echo  date ("d-m-Y"); ?></p> 			
			<p>Te llamas <?php echo strtoupper($nombre);  ?></p>
			<p>Naciste en <?php echo ($año); ?></p> <p> y tienes <?php echo ($edad); ?> años</p> 
			<p>Tu nombre tiene <?php echo strlen($nombre); ?> caracteres</p>

				

				
				
			
	
			 

		</pre>

<?php include "_footer.php" ?>	