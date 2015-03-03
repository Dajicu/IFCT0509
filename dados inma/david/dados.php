<?php 

	// $dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0020.gif" alt="">';
	// $dice ='<img src="http://www.close-upmagicshop.com/WebRoot/StoreES2/Shops/61591596/47A1/B43F/F9B3/9DC1/FACE/C0A8/2936/8FD1/dados_0020_blancos.png" alt="">';

	// if(isset($_POST[start])){
	// 	echo $dados;
	// }
	// if(isset($_POST[stop])){
	// 	echo $dice;
	// }

?>

<?php include "_header.php" ?>

<div class="well well-sm text-center">Dados (números aleatorios)</div>

<div class="container well col-xs-offset-2">
	<div class="row col-xs-6 text-center"><h3>CPU</h3>
		<?php 

	$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0020.gif" alt="">';
	$dice ='<img src="http://www.close-upmagicshop.com/WebRoot/StoreES2/Shops/61591596/47A1/B43F/F9B3/9DC1/FACE/C0A8/2936/8FD1/dados_0020_blancos.png" alt="">';

	if(isset($_POST["start"])){
		echo $dados;
	}
	if(isset($_POST["stop"])){
		echo $dice;
	}

	?><br /><br /><br />
	</div>
	<div class="row col-xs-6 text-center"><h3>YO</h3>
	<?php 

	$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0020.gif" alt="">';
	$dice ='<img src="http://www.close-upmagicshop.com/WebRoot/StoreES2/Shops/61591596/47A1/B43F/F9B3/9DC1/FACE/C0A8/2936/8FD1/dados_0020_blancos.png" alt="">';

	if(isset($_POST["start"])){
		echo $dados;
	}
	if(isset($_POST["stop"])){
		echo $dice;

	}

	?><br /><br /><br />
	</div>
</div>	


<div class="well well-sm col-xs-12 text-center">
	<form action="dados.php" method="post">
		<input type="submit" name="start" class="btn btn-success" value="Start">
		<input type="submit" name="stop" class="btn btn-success" value="Stop">

		
	</form>
	
</div><br /><br /><br /><br />
<div class="container well col-xs-offset-2">
	<div class="row col-xs-6 text-center"><h3>CPU</h3><h1>
		<?php 
			if(isset($_POST["stop"])){
				$d1 = (rand (1,6));
				$d2 = (rand (1,6));

				if ($d1 == 1){ $imagen = '<img src="img/dado1.png" alt="">';}
				elseif ($d1 == 2){ $imagen = '<img src="img/dado2.png" alt="">';}
				elseif ($d1 == 3){ $imagen = '<img src="img/dado3.png" alt="">';}
				elseif ($d1 == 4){ $imagen = '<img src="img/dado4.png" alt="">';}
				elseif ($d1 == 5){ $imagen = '<img src="img/dado5.png" alt="">';}
				elseif ($d1 == 6){ $imagen = '<img src="img/dado6.png" alt="">';}
				if ($d2 == 1){ $imagen2 = '<img src="img/dado1.png" alt="">';}
				elseif ($d2 == 2){ $imagen2 = '<img src="img/dado2.png" alt="">';}
				elseif ($d2 == 3){ $imagen2 = '<img src="img/dado3.png" alt="">';}
				elseif ($d2 == 4){ $imagen2 = '<img src="img/dado4.png" alt="">';}
				elseif ($d2 == 5){ $imagen2 = '<img src="img/dado5.png" alt="">';}
				elseif ($d2 == 6){ $imagen2 = '<img src="img/dado6.png" alt="">';} 
			}

			echo $imagen . " ";
			echo $imagen2;

		?></h1><br /><br /><br />
	</div>
	<div class="row col-xs-6 text-center"><h3>YO</h3><h1>
		<?php 

		
			if(isset($_POST["stop"])){
				$d3 = rand (1,6)." "; 
				$d4 = rand (1,6);

				if ($d3 == 1){ $imagen = '<img src="img/dado1.png" alt="">';}
				elseif ($d3 == 2){ $imagen = '<img src="img/dado2.png" alt="">';}
				elseif ($d3 == 3){ $imagen = '<img src="img/dado3.png" alt="">';}
				elseif ($d3 == 4){ $imagen = '<img src="img/dado4.png" alt="">';}
				elseif ($d3 == 5){ $imagen = '<img src="img/dado5.png" alt="">';}
				elseif ($d3 == 6){ $imagen = '<img src="img/dado6.png" alt="">';}
				if ($d4 == 1){ $imagen2 = '<img src="img/dado1.png" alt="">';}
				elseif ($d4 == 2){ $imagen2 = '<img src="img/dado2.png" alt="">';}
				elseif ($d4 == 3){ $imagen2 = '<img src="img/dado3.png" alt="">';}
				elseif ($d4 == 4){ $imagen2 = '<img src="img/dado4.png" alt="">';}
				elseif ($d4 == 5){ $imagen2 = '<img src="img/dado5.png" alt="">';}
				elseif ($d4 == 6){ $imagen2 = '<img src="img/dado6.png" alt="">';}
			}
			echo $imagen . " ";
			echo $imagen2;	
	
		?></h1><br /><br />
	
</div>	
<div class="well well-sm col-xs-9 text-center col-xs-offset-1"><?php 
		
		if(isset($_POST["stop"])){
		$a = $d1 + $d2;
		$b = $d3 + $d4;

		if ($a > $b) echo "<h2>La CPU gana!!</h2>";
		elseif ($a == $b) echo "<h2>Ha sido empate!!</h2>";
		elseif ($a < $b) echo "<h2>He ganado yo!!</h2>";
		}
 ?>
 </div>




	




















<?php include "_footer.php" ?>