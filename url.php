<?php
	session_start();	
?>

<html>
	<head>
		<title>URL</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		
	</head>
	
	<body>
		<header>
			<center><h1>Anketa uspješno stvorena!</h1></center>
			<hr/>
		</header>
		<main class="login">
		
			<div class="login">
				<h2>Podijeli anketu</h2><br/>
				
				<input id="URLTextbox"type="textbox" name="URL" placeholder="URL kreirane ankete" size="50"><br/>
				
				<br/><a href="#"><input type="submit" value="Kopiraj URL" name="kopiraj" id="kopiraj"></a>
				<a href="rjesavanje.php"><input type="submit" value="Dijeli" name="dijeli" id="dijeli"></a><br/>
			</div>
			
			
			
			
			
		</main>
		
		<footer>
			<h3>Trenutni korisnik: </h3> <p><?php echo $_SESSION['username']; ?> </p>
			<h3>Datum i vrijeme: </h3> &nbsp&nbsp&nbsp&nbsp
		</footer>
		
	</body>
</html>















