<?php
class Cachorro{
  function latir(){
    echo "AU , AU, AU <br>";
  }
  function andar($metros){
    echo "O Cachorro andou $metros metros <br>";
  }

}
$pingo = new Cachorro;
$bob = new Cachorro;
$pandora = new Cachorro;

$pingo-> latir();
$pingo-> andar(10);

$bob-> latir();
$bob-> andar(100);

$pandora-> latir();
$pandora-> andar(200);

?>
