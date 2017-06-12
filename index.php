<?php
	$error=false;
	if(isset($_POST['login'])){
		$username=preg_replace('/[^A-Za-z]/','',$_POST['username']);
		$password=($_POST['pass']);
		if(file_exists('podaci.xml')){
			$xml=simplexml_load_file("podaci.xml");
			foreach ($xml->user as $users){ 
				if($username == $users->username){
					if($password == $users->password){
						session_start();
						$_SESSION['username']=$username;
						header('Location: prikaz.php');
						die;
					}
				}
			}
		}else{
			die("Error: Cannot create object");
			}
	$error=true;
	}
?>

<html>
	<head>
		<title>Prijavi se!</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	<body>
		<header>
			<center><h1>Dobrodošli!</h1></center>
		</header>
		<main class="login">
			<form method="post" action="">
				<table>
					<tr>
						<td><br/>
							<label for="username"><b>Korisničko ime: </b></label>
						</td>
						<td><br/>
							<input class="login"type="text" name="username" id="username" placeholder=" Unesite korisničko ime" size="35" required/>
						</td>
					</tr>
					
					<tr>
						<td><br/>
							<label for="pass"><b>Lozinka: </b></label>
						</td>
						<td><br/>
							<input class="login"type="password" name="pass" id="pass" placeholder=" Unesite lozinku" size="35" required/><br/>
						</td>	
					</tr>
					<tr>
						<td>
							
						</td>
						<td>	
							<a href="#2">Zaboravili ste lozinku?</a>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td><br/>
							<a><input type="submit" value="Prijava" name="login" id="prijava"></a><br/>
						</td>
					</tr>
				</table>
			</form>
			<div class="error">
				<?php
							if($error){
								echo 'Pogrešno korisničko ime ili lozinka! <br/> Pokušajte ponovno!'; 
							 
							}
				?>
			</div>
		</main>
	</body>
</html>
