<?php
echo"<html><head> <style>",include "style.css","</style><title> Devoir 1 PHP</title></head><body>"; 
echo"<h2> Centrale d'achats</h2>";
echo"<h4>Commande clients</h4>";
try{$file = fopen("commande  clients.txt", "r");
$array = explode("|", fgets($file));
 echo "<table > <caption> Table de commande </caption>";
 echo "<tr><th><b> Numero de commande:</b></th><th>Numero Clien: </th>";
 echo "<<th>Date de commande:</th><th>Designation Article: </th>";
 echo "<<th> Quantite(Pal):</th><th><Prix Unitaire (DH)</th>";
 echo "<th> Date de livraision::</th><th><b>Adresse de client<</th> </tr>";
 
while(!feof($file)){
      $array = explode("|", fgets($file));
      echo "<tr>";
      echo " <td> " , $array[0] , "</td>";
      echo " <td> " , $array[1] , "</td>";
      echo " <td> " , $array[2] , "</td>";
      echo " <td> "  , $array[3] , "</td>";
      echo " <td> "  , $array[4] , "</td>";
      echo " <td> "  , $array[5] , " </td>";
      echo " <td> "  , $array[6] , " </td>";
      echo " <td> "  , $array[7] , " </td>";
      echo"</tr>";
}
fclose($file);  
echo"</table></body></html>";


}
 catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>