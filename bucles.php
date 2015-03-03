<?php include '_header.php' ?>


<div class="well well-sm text-center">Bucles</div>

<div class="well well-sm text-center">Elige la tabla que quieres</div>

<div class="container">
	<div class="row">
		<div class="col col-xs-4 col-xs-offset-4">
			<form action="bucles.php" method="post">
				<input type="number" name="numero" placeholder="elige un número"; <br>
				<input type="submit" name="submit" class="btn btn-success" value="Calcula">

			</form>	
		</div>
	</div>
	<div class="row">
		<div class="col col-xs-4 col-xs-offset-4 alert alert-warning text-center">
			<?php 
			$x = $_POST["numero"];

			if (isset($_POST['submit'])){
				
				for($i=1;$i<=10;$i=$i+1){		
					echo  $x . "x" . $i ." : " .  $x*$i  . "<br>";		
					echo  $x . "x" . $i ." : " .  $x*$i  . "<br>";		
				}
			}

			?>
		</div>
	</div>
</div>

<br /><br /><br /> 

<div class="container">
	
	<div class="row">
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 1.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "1 x " .$i ." : " .  $i*1  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 2.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "2 x " .$i ." : " .  $i*2  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 3.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "3 x " .$i ." : " .  $i*3  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 4.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "4 x " .$i ." : " .  $i*4  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 5.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "5 x " .$i ." : " .  $i*5  . "<br>";		
			}
			?>
			</div>
		</div>

	</div>	
	<div class="row">
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 6.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "6 x " .$i ." : " .  $i*6  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 7.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "7 x " .$i ." : " .  $i*7  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 8.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "8 x " .$i ." : " .  $i*8  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 9.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "9 x " .$i ." : " .  $i*9  . "<br>";		
			}
			?>
			</div>
		</div>
		<div class="col col-xs-2 text-center alert alert-danger"><h4>Tabla del 10.</h4>
			<div class="alert alert-success text-center">
			<?php  
			for($i=1;$i<=10;$i=$i+1){		
				echo "10 x " .$i ." : " .  $i*10  . "<br>";		
			}
			?>
			</div>
		</div>
	</div>	
</div>


	
	
	

	



















<?php include '_footer.php' ?>