<?php
	/**
	* @input $a -> array of integers
	*/
	// return an integer //

	function swap($a){
		//WRITE YOUR CODE HERE
		      
		    $i = 0;
		    $j = count($a)-1;
		    
		    while($i < $j) {
					$temp = $a[$i];
					$a[$i] = $a[$j];
					$a[$j] = $temp;
					
					$i++;
					$j--;
		    }
							
		return $a;
		
	}
	
	$result = swap([1,2,3,4]);
	
	print_r($result);
?>
