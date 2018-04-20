<?php

	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte_cm"];
	BMIcalc($gewicht, $lengte);

	function BMIcalc($gewicht, $lengte) {
		$lengte = $lengte / 100;
		$bmi = $gewicht / ($lengte * $lengte);
		$bmi = round($bmi,1);//afronden naar decimaal
		echo "<ul><li>Uw lengte is: $lengte m</li> <br>";
		echo "<li>Uw gewicht is: $gewicht kg</li></ul> <br>";
		echo "Uw BMI is: $bmi";
	}

?>