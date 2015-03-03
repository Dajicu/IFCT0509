<?php include "_header.php" ?>

	<div class="well well-sm text-center">Calculadora</div>


	<?php
		$a = $_POST["numero_1"];
		$b = $_POST["numero_2"];
	?>



	<?php 
 		if (isset($_POST['submit'])) {
   				
   			if (isset($_POST['suma'])) 
      			echo $a + $b;   
      		if (isset($_POST['resta'])) 
      			echo $a - $b;
      		if (isset($_POST['multiplica'])) 
      			echo $a * $b;
      		if (isset($_POST['divide'])) 
      			echo $a / $b;

			}




		if (isset($_POST['reset'])) {	

      		$a = $_POST["numero_1"];
			$b = $_POST["numero_2"];

      		if (isset($_POST['reset']))
      			$a =""; $b ="";
      		}
	
 	 ?>



<?php include "_footer.php" ?>
