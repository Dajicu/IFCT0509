	<?php 
 		// if (isset($_POST['submit'])) {
   			
   // 			$a = $_POST["numero_1"];
			// $b = $_POST["numero_2"];	

   // 			if (isset($_POST['suma'])) 
   //    			echo $a + $b;   
   //    		if (isset($_POST['resta'])) 
   //    			echo $a - $b;
   //    		if (isset($_POST['multiplica'])) 
   //    			echo $a * $b;
   //    		if (isset($_POST['divide'])) 
   //    			echo $a / $b;

			// }
 	 ?>


<?php include "_header.php" ?>

	<div class="well well-sm text-center">Condicionales</div>

	<!-- <form action="suma.php" method="post">
		<input type="number" name="numero_1" placeholder="Un número aquí" /><br />
		<input type="number" name="numero_2" placeholder="Otro número aquí" /><br />

		<input type="submit" name="submit" />
	</form>
 -->

<!-- <form action="suma.php" method="post">
		<input type="text" name="nombre" placeholder="nombre" /><br />
		<input type="text" name="apellido" placeholder="apellido" /><br />
		<input type="submit" name="submit" /><br>
		<input type="checkbox" name="usuario" value="1"> nuevo usuario<br><br>
		
	</form> -->






<div class="well well-sm col-md-2 col-md-offset-5 text-center">calculadora
	<div class="row">
		<form action="condicionales.php" method="post">
			<input type="number" name="numero_1" value= "<?php echo $_POST["numero_1"]; ?>" /><br /><br />
			<input type="number" name="numero_2" value= "<?php echo $_POST["numero_2"]; ?>" /><br /><br /><br />
			<input type="submit" name="submit" class="btn btn-success" value="Calcula">
			<input type="reset" name="reset" class="btn btn-warning" value="Borrar">
			<!-- <button type="submit" class="btn btn-warning text-centre">Calcula</a><br /> -->
	</div>	
	<div class="row">	
			<input type="checkbox" name="suma" value="1">+
			<input type="checkbox" name="resta" value="1">-
			<input type="checkbox" name="multiplica" value="1">*
			<input type="checkbox" name="divide" value="1">/
	</div>
		</form>	
	
</div>

<div class="well well-sm col-md-2 col-md-offset-5 text-center"><h4><?php 
 		if (isset($_POST['submit'])) {
   			
   			$a = $_POST["numero_1"];
			$b = $_POST["numero_2"];	

   			if (isset($_POST['suma'])) 
      			echo $a + $b;   
      		if (isset($_POST['resta'])) 
      			echo $a - $b;
      		if (isset($_POST['multiplica'])) 
      			echo $a * $b;
      		if (isset($_POST['divide'])) 
      			echo $a / $b;
      		}


			
 	 ?></h4>

	<form action="condicionales.php" method="post">
 	 <input type="submit" name="reset" class="btn btn-warning" value="Borrar">
 	 	<?php 
 	 	if (isset($_POST['reset'])) {	

      		$a = $_POST["numero_1"];
			$b = $_POST["numero_2"];

      		if (isset($_POST['reset']))
      			$a ="0";
      			$b ="0";
      		}
 		?>
	</form>
</div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<div class="well well-sm text-center">Tarifa cine</div>

<br />

<div class="well well-sm col-md-2 col-md-offset-5 text-center">
	<div class="row">
		<form action="condicionales.php" method="post">
			<input type="number" name="edad" value= "" placeholder="edad" /><br /><br />			
			<input type="submit" name="submit" class="btn btn-success" value="Calcula">
				
		</form>
	</div>

	<br />

	<div class="well well-sm  col-md-offset-1 text-center">
	<h4><?php 
 		
      		
			if (isset($_POST['submit'])) {
      		$edad = $_POST["edad"];
			

	      		if ($edad <= 12){
	      			echo $resultado="Tarifa gratis";
	      		}	
	      		if ($edad >=13 && $edad <=16){
	      			echo $resultado="Tarifa joven 4€";
	      		}
	      		if ($edad >=17 && $edad <=65){
	      			echo $resultado="Tarifa adulto 8€";
	      		}	   
	      		if ($edad >65){
	      			echo $resultado="Tarifa jubilado 4€";
	      		}
      		}
 					
 	 ?></h4>
 	 </div>
</div>	
	
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />	
<div class="well well-sm text-center">Media notas</div>

<div class="well well-sm col-md-2 col-md-offset-5 text-center">
	<div class="row">
		<form action="condicionales.php" method="post">
			<input type="number" name="nota1" value= "" placeholder="nota 1" /><br /><br />	
			<input type="number" name="nota2" value= "" placeholder="nota 2" /><br /><br />
			<input type="number" name="nota3" value= "" placeholder="nota 3" /><br /><br />		
			<input type="submit" name="submit" class="btn btn-success" value="Calcula">
				
		</form>
	</div>

	<br />	
	<div class="well well-sm  col-md-offset-1 text-center">
	<h4><?php 
 		
      		
			if (isset($_POST['submit'])) {
      		$media = ($_POST["nota1"] + $_POST["nota2"] + $_POST["nota3"]) / 3;
			

	      		if ($media <= 2){
	      			$resultado="Muy Deficiente";
	      		}	
	      		elseif ($media >2 && $media <4){
	      			$resultado="Deficiente";
	      		}
	      		elseif ($media >=4 && $media <5){
	      			$resultado="Insuficiente";
	      		}	
	      		elseif ($media >=5 && $media <6){
	      			$resultado="Suficiente";
	      		}
	       	    elseif ($media >=6 && $media <7){
	      			$resultado="Bien";
	      		}	      
	      		elseif ($media >=7 && $media <9){
	      			$resultado="Notable";
	      		}
	      		elseif ($media >=9 && $media <=10){
	      			$resultado="Sobresaliente";
	      		}
      		}

      		echo "Tu nota media es " . $media; 
      		echo "<br />" .$resultado;
 					
 	 ?></h4>
	

















<?php include "_footer.php" ?>