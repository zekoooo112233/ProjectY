<?php
	session_start();	
?>

<html>
	<head>
		<title>Analiza</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	<body>
		<header class="analizah">
			<center><h1>Analiza</h1></center>
		</header>
		<main class = "analiza">
			<center><section id="1">
			<h2>Prvo pitanje</h1>
				<img src="img/1_pitanje.png" alt="prvo pitanje"/>
			</section>
			<br/><br/>
			<section id="2">
			<h2>Drugo pitanje</h1>
				<img src="img/2_pitanje.png" alt="drugo pitanje"/>
			</section>
			<br/><br/>
			<section ="3">
			<h2>Treće pitanje</h1>
				<img src="img/3_pitanje.png" alt="treće pitanje"/>
			</section>
			<br/><br/>
			</center>
		</main>	
		<footer>
			<h3>Trenutni korisnik: </h3> <p><?php echo $_SESSION['username']; ?> </p>
			<h3>Datum i vrijeme: </h3><p><?php echo $date = date('H:i:s / d-M-y '); ?></p> &nbsp&nbsp&nbsp&nbsp
		</footer>
	</body>
</html>
