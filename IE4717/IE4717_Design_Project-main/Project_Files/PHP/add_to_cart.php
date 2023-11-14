<?php
	/* if (isset($_GET['adidastee'])) {
		array_push($_SESSION['cart'], 'adidastee');

	} elseif (isset($_GET['adidaspants'])) {	
		array_push($_SESSION['cart'], 'adidaspants');

	} elseif (isset($_GET['adidasshoe1'])) {
		array_push($_SESSION['cart'], 'adidasshoe1');

	} elseif (isset($_GET['adidasshoe2'])) {		
		array_push($_SESSION['cart'], 'adidasshoe2');
	} */

	
	if (isset($_GET['adidastee'])){
		$_SESSION['cart'][0]++;
	}
	elseif (isset($_GET['adidaspants'])){
		$_SESSION['cart'][1]++;
	}
	elseif (isset($_GET['adidasshoe1'])){
		$_SESSION['cart'][2]++;
	}
	elseif (isset($_GET['adidasshoe2'])){
		$_SESSION['cart'][3]++;
	}
	elseif (isset($_GET['nikeshoe'])){
		$_SESSION['cart'][4]++;
	}
	elseif (isset($_GET['adidasshorts'])){
		$_SESSION['cart'][5]++;
	}
	elseif (isset($_GET['decathlonshorts'])){
		$_SESSION['cart'][6]++;
	}
		// Helped u type out abit first see if this is wat u intended


?>