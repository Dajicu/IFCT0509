<?php

	$cartas = ["As","2","3","4","5","6","7","8","9","10","J","Q","K"];
	$palos = ["picas","treboles","diamantes","corazones"];

	if (isset($_POST["submit"])){
		
		$c1= rand (1,13);
		$p1= rand (1,4);
		$c2= rand (1,13);
		$p2= rand (1,4);

		

		$res1= "img/poker/carta_".$c1."_".$p1.".gif";
		$res2= "img/poker/carta_".$c2."_".$p2.".gif";
		
		
	}		
?>
	

<?php include "_header.php" ?>

<div class="well well-sm text-center">Tus cartas de poker</div>

<div class="container">
	<div class="row">
		<div class="col col-xs-4 col-xs-offset-4">
			<form action="poker.php" method="post">
				
				<input type="submit" name="submit" class="btn btn-success" value="cartas">

			</form>	
		</div>
	</div>
	<br /><br />
	<div class="row">
		<div class="col col-xs-4 col-xs-offset-4">
			<?php 
				echo $cartas[$c1 - 1] . " de ";
				echo $palos[$p1- 1];
		    ?>
			<img src="<?php echo $res1 ?>" alt="">
			<img src="<?php echo $res2 ?>" alt="">
			<?php 
				echo $cartas[$c2 - 1] . " de ";
				echo $palos[$p2- 1];
		    ?>
			
		</div>
	</div>
	
</div>






















<?php include "_footer.php" ?>