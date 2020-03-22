<?php
	

try{$file = fopen("commande.txt", "r");
$array = explode("|", fgets($file));
while(!feof($file)){
    	$array = explode("|", fgets($file));
   		echo "Achat Numero: " , $array[0] , "<br>";
   		echo "Clien Numero: " , $array[1] , "<br>";
   		echo "Date: " , $array[2] , "<br>";
   		echo "Article: " , $array[3] , "<br>";
   		echo "Quantite(Pal): " , $array[4] , "<br>";
   		echo "Prix Unitaire (DH) : " , $array[5] , " <br>";
   		echo"------------- </br>";
}
 fclose($file);   
}
 catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>