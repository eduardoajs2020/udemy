<?php

 function arr()
 {
   $arr = [];


   for($i=0; $i <=20; $i++)
   {
     array_push($arr, $i);
   }
      print_r($arr);
      echo "<br>";

   for($i =0; $i < count($arr); $i++)
   {
       if($arr[$i] > 7)
       {
         print_r([$arr[$i]]);
       }
   }
}
arr();

?>
