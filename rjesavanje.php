<?php
	session_start();	
?>

<html>
	<head>
		<title><NAZIV ANKETE></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<header>
			<center><h1>"Naziv ankete"</h1></center>
			<hr/>
		</header>
		<main class="stvori">
			<div class="potpis">
				<label><b>Potpis studenta ili JMBAG: </b><input type="text" size="35"/></label>
				<br/>
				
			</div>
			
			
			
			<div class="stvori">
				<a><i class="fa fa-star" aria-hidden="true"></i></a><br/>
				<label><b>1. pitanje: </b><textarea rows="2" cols="50" readonly></textarea><br/></label>
				
				<label><input type="radio" name="vrstaOdg" value="vrstaOdg" class="odgovor">  Opcija 1 </label><br/>
					
				<label><input type="radio" name="vrstaOdg" value="vrstaOdg" class="odgovor">  Opcija 2 </label><br/>
					
				<label><input type="radio" name="vrstaOdg" value="vrstaOdg" class="odgovor">  Opcija 3 </label><br/>
			</div>
			
				<div class="stvori">
				<a><i class="fa fa-star" aria-hidden="true"></i></a><br/>
				<label><b>2. pitanje: </b><textarea rows="2" cols="50" readonly></textarea><br/></label>
				
				<label><input type="checkbox" name="vrstaOdg" value="vrstaOdg" class="odgovor"> Opcija 1</label><br/>
					
				<label><input type="checkbox" name="vrstaOdg" value="vrstaOdg" class="odgovor"> Opcija 2</label><br/>
					
				<label><input type="checkbox" name="vrstaOdg" value="vrstaOdg" class="odgovor"> Opcija 3</label><br/>
			</div>
			
			<div class="stvori">
				
				<label><b>3. pitanje: </b><textarea rows="2" cols="50" readonly></textarea><br/></label>
				<br/>
				<label>Vaš odgovor: <textarea rows="2" cols="50" class="odgovor"></textarea><br/></label>
				<br/>	
				
			</div>
			
			
		
			
			<a href="izvjestaj.php"><input type="submit" value="Predaj anketu!" name="predaj" id="stvoriPredaj"></a><br/>
			
			
		</main>
		
		<footer>
			<h3>Trenutni korisnik: </h3> <p><?php echo $_SESSION['username']; ?> </p>
			<h3>Datum i vrijeme: </h3><p><?php echo $date = date('H:i:s / d-M-y '); ?></p> &nbsp&nbsp&nbsp&nbsp
		</footer>
		
	</body>
</html>















