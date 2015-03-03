<?php include "_header.php" ?>

	<div class="well well-sm text-center">Consola de linux</div>

		<pre>
			<?php 
				$comando = $_POST["comando"];
				echo exec ($comando);
				$salida = shell_exec($comando);
				echo $salida;

			 ?>

					 

		</pre>
	<form action="comandos.php">
		<button type="submit" class="btn btn-success pull-center margin-left:100px">Volver</button>
	</form>	
<?php include "_footer.php" ?>	