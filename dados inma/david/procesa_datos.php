<?php include '_header.php' ?>

	<div class="well">procesa</div>
	
	<p>La fecha de hoy es: <?php echo $fecha=date("d-m-Y",time())?></p><br><br><br>

	<p>¿Las condiciones han sido aceptadas? <?php echo $_POST["aceptar"] ?> </p>
	<p>La fecha de hoy es: <?php echo $_POST["fecha"]?></p><br>
	<p>Tu nombre tiene : <?php echo strlen($_POST["nombre"]); ?>  caracteres</p><br>
	<p>Te llamas : <?php echo strtoupper ($_POST["nombre"])?></p><br>
	<p>Tienes: <?php echo  $_POST["fecha"] -  $_POST["fnacimiento"]?>  años</p><br><br><br>

	<p>Tienes: <?php echo  $fecha1 = time() -  $_POST["fnacimiento"]?>  años</p>
		<p>	tienes: <?php date("d-m-Y", $fecha1) ?></p>
	<p>Tienes: <?php echo $fecha ?>  años</p><br>	

<?php include '_footer.php' ?>