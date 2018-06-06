<?php 
  function sum($a,$b){
  $result =0;
  for ($i=$a;$i<=$b;$i++){
     $result=$result+$i; 
  }
  
  return $result;
  }
  
  
  
  $result= sum (9,50);
  
 
   if ($result>900){
   echo'900よりも大きい'.PHP_EOL;
   }
   
    else {
   echo'900より小さいねん'.PHP_EOL;
   }
   
?>
   
   
   