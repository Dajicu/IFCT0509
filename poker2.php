<?php
	if (isset($_POST["submit"])){
		$c1= rand (1,13);
		$p1= rand (1,4);
		$c2= rand (1,13);
		$p2= rand (1,4);
		$c3= rand (1,13);
		$p3= rand (1,4);
		$c4= rand (1,13);
		$p4= rand (1,4);
		$c5= rand (1,13);
		$p5= rand (1,4);
		$res1= "img/poker/carta_".$c1."_".$p1.".gif";
		$res2= "img/poker/carta_".$c2."_".$p2.".gif";
		$res3= "img/poker/carta_".$c3."_".$p3.".gif";
		$res4= "img/poker/carta_".$c4."_".$p4.".gif";
		$res5= "img/poker/carta_".$c5."_".$p5.".gif";
	
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
			<img src="<?php echo $res1 ?>" alt="">
			<img src="<?php echo $res2 ?>" alt="">
			<img src="<?php echo $res3 ?>" alt="">
			<img src="<?php echo $res4 ?>" alt="">
			<img src="<?php echo $res5 ?>" alt="">
		</div>
	</div>
	
</div>