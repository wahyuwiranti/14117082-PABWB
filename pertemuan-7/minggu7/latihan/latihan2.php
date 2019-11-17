<?php
    $nama="Wahyu Wiranti";
    $warna="pink";
    function harga($a){
        $length=strlen($a);
        if($length>0 && $length<=10) return $length*300;
        elseif($length>10 && $length<=20) return $length*500;
        else return $length*700;
    }
	
    function prinin($warna="red",$nama){
        echo '<font color='.$warna.'>'.$nama.'</font><br>';
        echo "Harga : ".harga($nama);
    }
	
    prinin($warna,$nama);
?>