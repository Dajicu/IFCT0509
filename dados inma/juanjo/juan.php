<?php 
				       $a1=rand(1, 6); $a2=rand(1, 6);
				       $b1=rand(1, 6); $b2=rand(1, 6);

				       if ($a1==1) {$dado1='<img src="d1.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a1==2) {$dado1='<img src="d2.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a1==3) {$dado1='<img src="d3.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a1==4) {$dado1='<img src="d4.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a1==5) {$dado1='<img src="d5.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a1==6) {$dado1='<img src="d6.jpg" width=100 height=100 alt="" >';}
				       if ($a2==1) {$dado2='<img src="d1.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a2==2) {$dado2='<img src="d2.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a2==3) {$dado2='<img src="d3.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a2==4) {$dado2='<img src="d4.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a2==5) {$dado2='<img src="d5.jpg" width=100 height=100 alt="" >';}
				       	elseif ($a2==6) {$dado2='<img src="d6.jpg" width=100 height=100 alt="" >';}
				       if ($b1==1) {$dado3='<img src="d1.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b1==2) {$dado3='<img src="d2.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b1==3) {$dado3='<img src="d3.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b1==4) {$dado3='<img src="d4.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b1==5) {$dado3='<img src="d5.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b1==6) {$dado3='<img src="d6.jpg" width=100 height=100 alt="" >';}
				       if ($b2==1) {$dado4='<img src="d1.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b2==2) {$dado4='<img src="d2.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b2==3) {$dado4='<img src="d3.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b2==4) {$dado4='<img src="d4.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b2==5) {$dado4='<img src="d5.jpg" width=100 height=100 alt="" >';}
				       	elseif ($b2==6) {$dado4='<img src="d6.jpg" width=100 height=100 alt="" >';}

				       	$puntosPC= $a1 + $a2;
				       	$puntosYO= $b1 + $b2;
				  		$acumuladosPC = $_POST["acumuladosPC"] + $puntosPC;
 						$acumuladosYO = $_POST["acumuladosYO"] + $puntosYO;

			 	 	 	if($puntosPC < $puntosYO) {$ganador = "Ganador Yo";}
			 	 		elseif ($puntosPC > $puntosYO) {$ganador = "Ganador PC";}
			 	 		elseif ($puntosPC == $puntosYO) {$ganador = "Empate";}

			 	 	 	if($acumuladosPC < $acumuladosYO) {$partida = "Ganador de la partida Yo";}
			 	 		elseif ($acumuladosPC > $acumuladosYO) {$partida = "Ganador de la partida PC";}
			 	 		elseif ($acumuladosPC == $acumuladosYO) {$partida = "Partida Empatada";}

			 	 		$npartida = $_POST["npartida"] + 1 ;
 ?>

<?php include '_header.php' ?>
	<div class="well">JUEGO DE DADOS</div>

		 <img src="dadosanim.gif" border="0" alt="" > 

		    	<div class="row">
		    		<div class="col-xs-6">
		    			<div class="well">
		    				<h3>Computadora</h3>
		    				<?php echo $dado1 , $dado2 ?>
		    			</div>
		    		</div>
		    		<div class="col-xs-6">
		    			<div class="well">
		    				<h3>YO</h3>
		    				<?php echo $dado3 , $dado4 ?>		    			
		    			</div>
		    		</div>
		    	</div>
		    	<br>
 			
 			<form action="juan.php" method="post">
			<h1>Jugada nº: <?php echo $npartida . ", Puntos Jugada PC: " . $puntosPC . " Puntos Jugada YO: " . $puntosYO ;?> </h1>
			<h1>Puntos Acumulados PC: <?php echo $acumuladosPC . ", Puntos Acumulados YO: " . $acumuladosYO ;?></h1>
			<h1>Resultado jugada: <?php echo $ganador . ", Resultado partida: " . $partida ;?></h1>			
			<input type="hidden" name="acumuladosPC" value="<?php echo $acumuladosPC ?>" />
			<input type="hidden" name="acumuladosYO" value="<?php echo $acumuladosYO ?>" />
			<input type="hidden" name="npartida" value="<?php echo $npartida ?>" />			
		    <input type="submit" name="submit" value="Lanzar Dados" size="45" />
		    </form>		    		    	

<?php include '_footer.php' ?>