<?php 	
function myCountChar ($str,$key) { 
   echo substr_count($str, $key);
 } 
 myCountChar('bootcamp', 'o' );
 echo "\n";
 myCountChar('arkademy','k');

 ?>