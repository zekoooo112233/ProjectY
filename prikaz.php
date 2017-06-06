<?php
	session_start();	
?>

<!DOCTYPE html>
<html xmlns="http //www.w3.org/1999/xhtml">
	<head>
		<title>Prikaz anketa</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<header>
			<center><h1>Prikaz svih anketa</h1></center>
			<hr/>
		</header>
		<main class="login">
			<div class="PopisAnketa">
				<h1>"Naziv postojeće ankete"</h1>
				<br/>
				<hr/>
				<br/>
				<h4>Datum kreiranja: </h4><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
				<div id="opcije">	
					asda
				</div>
				
			</div>
			
			<div class="PopisAnketa">
				<h1>"Naziv postojeće ankete"</h1>
				<br/>
				<hr/>
				<br/>
				<h4>Datum kreiranja: </h4><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>

				
			</div>
			
			<div class="PopisAnketa">
				<h1>"Naziv postojeće ankete"</h1>
				<br/>
				<hr/>
				<br/>
				<h4>Datum kreiranja: </h4><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>

				
			</div>
			
			<div class="DodajAnketu">
				<h1>Stvori novu</h1>
				<br/>
				<a href="stvori.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>


				
			</div>
		</main>
		
		<footer>
			<h3>Trenutni korisnik: </h3> <p><?php echo $_SESSION['username']; ?> </p>
			<h3>Datum i vrijeme: </h3> &nbsp&nbsp&nbsp&nbsp
		</footer>
		
	</body>
</html>















