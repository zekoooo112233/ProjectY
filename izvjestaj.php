<?php
	session_start();	
?>

<html>
	<head>
		<title>Izvještaj</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	<body>
		<header class="izvjestajh">
			<center><h1>Izvještaj</h1></center>
		</header>
		<main class = "izvjestaj">
			<section id="1">
				<h3>1. Što mislite o kolegiju ? </h3>
					<ul>
						<li>a. Zanimljiv je : 98%</li>
						<li>b. Nije zanimljiv: 2%</li>
					</ul>
			</section>
			<section id="2">
				<h3>2. Je li vam ovo prvi upis kolegija ? </h3>
					<ul>
						<li>a. Da : 99%</li>
						<li>b. Ne : 1%</li>
					</ul>
			</section>
			<section id="3">
				<h3>3. Koju ocjenu očekujete iz ovog kolegija ? </h3>
					<ul>
						<li>a. 5 : 50%</li>
						<li>b. 4: 30%</li>
						<li>c. 3: 18%</li>
						<li>d. 2: 2%</li>
						<li>e. 1: 0%</li>
					</ul>
			</section>
			
			<center><a href="analiza.php"><input type="submit" value="Analiza" name="predaj" id="analiza"></a></center>
			
				
		</main>
		
		<footer id="izvjestaj">
			<h3>Trenutni korisnik: </h3> <p><?php echo $_SESSION['username']; ?> </p>
			<h3>Datum i vrijeme: </h3><p><?php echo $date = date('H:i:s / d-M-y '); ?></p> &nbsp&nbsp&nbsp&nbsp
		</footer>
		
	</body>
</html>
