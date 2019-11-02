<?php
    function swap(&$a,&$b){
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
	
    function prinin($a,$b){
        echo "<br>nilai 1: $a<br>";
        echo "nilai 2: $b<br>";
    }
	
    $a=5;
    $b=7;
    echo "Data Sebelum Ditukar: ";
    prinin($a,$b);
    swap($a,$b);
    echo "<br>Data Setelah Ditukar: ";
    prinin($a,$b);
?>