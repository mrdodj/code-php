<?php 

  $pic = array('<img src="1.jpg" border="0">','<img src="2.jpg" border="0">','<img src="3" border="0">','<img src="4.jpg" border="0">','<img src="5.jpg" border="0">');
  shuffle($pic);


?>

<html>
<head>
<title>devoir 1 exo 1 </title>
</head> 
<body>
  <table>
      <tr>
  <?php
      for($i=0;$i<3 ; $i++){
        echo "<td> ",$pic[$i],"</td>";
                            }
   ?>
   </tr>
   </table>
</body>
</html>