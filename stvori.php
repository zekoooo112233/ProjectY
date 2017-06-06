<?php
	session_start();	
?>

<html>
	<head>
		<title>Stvori anketu</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<header>
			<center><h1>Stvori anketu</h1></center>
			<hr/>
		</header>
		<main class="stvori">
			<div class="potpis">
				<label><b>Potpis studenta ili JMBAG: </b><input type="text" size="35"/></label>
				<br/>
				<label><input type="checkbox" name="potpis" value="Potpis"> Obavezan potpis<br/></label>
			</div>
			
			<div class="stvori">
				<label>1. pitanje: <textarea rows="2" cols="50"></textarea><br/></label>
				<br/>	
				<a><label><input type="checkbox" name="odgovor" value="ObaveznoPopuniti"> Obavezno popuniti</label></a><br/>
			</div>
			
			<div class="vrstaOdg">
				<h2>Vrsta odgovora</h2><br/>
					
				<label><input type="radio" name="vrstaOdg" value="vrstaOdg"><b>  Višestruki odgovor </b></label><br/>
					
				<label><input type="radio" name="vrstaOdg" value="vrstaOdg"><b>  Jednostruki odgovor </b></label><br/>
					
				<label><input type="radio" name="vrstaOdg" value="vrstaOdg"><b>  Tekstualni odgovor </b></label><br/>
			</div>
			
			<div class="potpis">
				<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<h2>Dodaj pitanje </h2>
				<br/>	
				
			</div>
			
			<a href="url.php"><input type="submit" value="Stvori anketu!" name="stvori" id="stvoriPredaj"></a><br/>
			
			
		</main>
		
		<footer>
			<h3>Trenutni korisnik: </h3> <p><?php echo $_SESSION['username']; ?> </p>
			<h3>Datum i vrijeme: </h3> &nbsp&nbsp&nbsp&nbsp
		</footer>
		
	</body>
</html>















