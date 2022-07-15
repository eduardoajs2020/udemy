<?php

function par_impar($numero){
  if($numero %2 == 0){
    echo "O número $numero é par<br>";
  }
  else{
    echo "O número $numero é impar<br>";
  }
}
par_impar(4);
par_impar(9);
par_impar(10);
par_impar(23);

?>
