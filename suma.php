<?php include "_header.php" ?>

	<div class="well well-sm text-center">Suma</div>

	<?php
	$a = $_POST["numero_1"];
	$b = $_POST["numero_2"];

	?>


	<!-- PHP DENTRO DE HTML -->

	<p>El número 1 es <?php echo ($a); ?></p>
	<p>El número 2 es <?php echo ($b); ?></p>
	<p>La suma de ambos números es <?php echo ($a) + ($b); ?></p>
	<p>La suma de ambos números es <?php echo $a + $b; ?></p>

	<!-- HTML DENTRO DE PHP -->

	<?php echo "<p> La suma de los números es = " . ($a + $b) . "</p>" ?>
	
	<!-- CONDICIONAL -->
	<?php 

	if ($a < $b) echo "El primer número es menor";
	else echo "El segundo número es menor";

 	?>

 	<?php 
 		if (isset($_POST['submit'])) {
   				
   			if (isset($_POST['usuario'])) 
      			echo "Bienvenido nuevo usuario";
   			else
      			echo "Por favor, marca la casilla";
			}
 	 ?>







<?php include "_footer.php" ?>