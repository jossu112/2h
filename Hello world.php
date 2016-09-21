<?php

	$firstName = "Johan";
	$lastName = "Reili";
	
	//echo tr6kib v2lja muutuja v22rtuse
	//echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName;
	
	

?>

<br>

<?php

	$age = 5;
	
	if ( $age < 18 ) {
		
		//kui vastus on t6ene (true)
		echo "alaaealine";
		
	} else{
		//kui vastus on v22r (false)
		echo "täisealine";
	}

?>

<br>

<?php

	for ($i = 0; $i < $age; $i = $i + 1) {
		
		echo $i."palju ";
		
	}
	echo "õnne";
?>

<br>

<?php

	echo date("dY");
	
?>