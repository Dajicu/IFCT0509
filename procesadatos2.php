<?php include "_header.php" ?>

	<div class="well well-sm text-center">procesadatos</div>

<pre>
		
		<?php print_r ($_POST); ?>	
		<?php $nombre = $_POST["nombre"]; ?>
		<?php $edad = $_POST["edad"]; ?>
			 		
		<p>Hoy es <?php echo date ("d-m-Y");?></p>
		<p>te llamas <?php echo strtoupper($nombre); ?></p>
		<p>tienes <?php echo ($edad); ?></p> 
		<p>tu nombre tiene <?php echo strlen($nombre); ?> caracteres</p>
			
			

		</pre>

<?php include "_footer.php" ?>	