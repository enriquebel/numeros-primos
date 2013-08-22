<?php 

#	Gabriel Hubermann
#	Hubermann.com
# 	hubermann@gmail.com

#  funciones para buscar y sumar numeros primos.	
	
function primos($num){

	
	$numero = 0;
	#recorro desde cero al numero recibido, chequeando que sea numero primo. (divisible por 1 y por si mismo)
	while($numero < $num ){

		if(check_primo($numero))
			$primos[] = $numero;
			
		$numero++;
	}

	echo 'Total: '.array_sum($primos);
	
}

function check_primo($value){
	
	$divisor=2;
	#mientras sea menor o igual al divisor
	while($divisor <= $value){
		
		#mientras el resto del numero dividido por el divisor sea diferente a cero.
   		while( $value % $divisor != 0 )
      	
      		$divisor++;
      		#si encuentro que puede dividirse por si mismo es TRUE.
      		if($value == $divisor)
				return true;
			else
				return false;
			break;

	}
	return 0;
   	
}


primos(1000);


?>
