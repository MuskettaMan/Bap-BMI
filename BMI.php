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
		echo "Uw BMI is: $bmi <br>U bent: ";

		switch ($bmi) {
			case ($bmi < 18.5):
				echo "ondergewicht";
				break;
			case ($bmi < 25):
				echo "normaal/gezond";
				break;
			case ($bmi < 27):
				echo "licht overgewicht";
				break;
			case ($bmi < 30):
				echo "matig overgeiwcht";
				break;
			case ($bmi < 40):
				echo "obesitas";
				break;
			case ($bmi >= 40 ):
				echo "morbide obesitas";
				break;
			default:
				echo "error: no value";
				break;
		}
		echo ".";

	}

?>