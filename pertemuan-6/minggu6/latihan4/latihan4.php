<?php
//Mencari Bilangan Prima
	
    echo "Berikut Bilangan Prima 1-37 : <br>";
      
    for($x=2; $x<=37; $x++){
		$cek=0;
        for ($i=2; $i<$x; $i++){
        	if($x%$i==0){
        		$cek++;
        	}
		}
		if($cek==0){
        	echo "$x" ; echo ", ";
		}
	}
?>