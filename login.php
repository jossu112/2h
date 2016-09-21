Ma tahaksin teha oma mvp lehekülje sellise, kus töötajad nt. massöörid saavad välja kuulutada ajad, millal
neil on võimalik tööd teha ja kliendid saavad teiselt poolt neid aegu vaadata ja broneerida neid
aegu vastavalt protseduuri pikkusele (on kindel hinnakiri ja teenuse kestvus). aga seda saab kasutada
igaüks, kes pakub mingit teenust, kus niiviisi aja broneerimine soimib. Muidugi on võimalik
teenusepakkujale ka helistada või näiteks läbi selle sama programmi kirjutada.




<?php
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	
	// kas e/post oli olemas
	if ( isset ( $_POST["signupEmail"] ) ) {
		
		if ( empty ( $_POST["signupEmail"] ) ) {
			
			// oli email, kuid see oli tühi
			$signupEmailError = "See väli on kohustuslik!";
			
		}
		
	}
	
	if ( isset ( $_POST["signupPassword"] ) ) {
		
		if ( empty ( $_POST["signupPassword"] ) ) {
			
			// oli password, kuid see oli tühi
			$signupPasswordError = "See väli on kohustuslik!";
			
		} else {
			
			// tean et parool on ja see ei olnud tühi
			// VÄHEMALT 8
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärkki pikk";
				
			}
			
		}
		
	}
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise lehekülg</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			
			<input name="loginPassword" type="password" placeholder="Parool">
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
			
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input name="signupPassword" type="password" placeholder="Parool"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
			
		</form>
		
	</body>
</html>