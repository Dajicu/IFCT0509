<?php include '_header.php' ?>

<?php $texto = "La rápida liebre marrón se llama Sílvia" ?>
<div class="well">Cadenas de texto</div>
	<div class="row lateral">
		<div class="columna">
			<strong>minúsculas:</strong> <?php echo strtolower($texto)  ?><br>
			<strong>mayúsculas:</strong> <?php echo strtoupper($texto)  ?><br>
			<strong>1ª mayúsculas:</strong> <?php echo ucfirst($texto)  ?><br>
			<strong>1ªs mayúsculas:</strong> <?php echo ucwords($texto)  ?><br>
			<strong>Longitud:</strong> <?php echo strlen($texto)  ?><br>
			<strong>reemplazar:</strong> <?php echo str_replace("Sílvia", "María", $texto)  ?><br>
			<strong>Espacios:</strong> <?php echo trim($texto)  ?><br>
			<strong>Buscar:</strong> <?php echo strstr($texto, "liebre")  ?><br>
		</div>
	</div>
<div class="well">Números</div>
	<div class="row lateral">
		<div class="col-xs-12">
			<?php 
				$var1 = 3;
				$var2 = 4;
	     	 ?>
	    		Matemáticas básicas: <?php  echo ((1 + 2 + $var1) * $var2) / 2 -5; ?><br> 
	    		Potencia: <?php  echo pow (2,8); ?><br>
	    		Raiz Cuadrada: <?php echo sqrt (100); ?><br>
	    		Nº al azar: <?php echo rand(); ?><br>
	    		Nº al azar del 1 al 10: <?php echo rand(1,10); ?><br>
	    		Valor absoluto: <?php echo abs(1 - 300); ?><br>	 	
		</div>
	</div>

	<div class="container">
		<div class="well well-sm text-center">PHP</div>
	</div>

<?php include '_footer.php' ?>