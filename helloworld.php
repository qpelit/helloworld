<?php
//Variable starts with $' string has to use quoatation marks
   $first_name = "Hakan";
   $last_name = "Pelit";
   //for adding up numbers + sign
//show code to browser
   echo $first_name." ".$last_name;
  
  $age=5;
  if($age<=6){
	  echo "  You can sleep at lunchtime";
	  
	  
  }else {
	  
	  echo "Nope";
	  
  }
?>
<br>

<?php
 
  for ( $i = 1; $i<=$age; $i++ ) {
      echo $i;
   }
?>
<br>
<?php

 //echo date("d/m/Y G:i");
 echo "Today is " .date("d.Y H:m");


?>