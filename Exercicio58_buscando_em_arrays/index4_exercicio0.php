<?php
$arr = [
  'Eduardo' => 20,
  'Jussara' => 50,
  'Carlos' => 10,
  'Leo' => 100,
  'Bruno' => 70,
  'Maria' => 80
];

arsort($arr);

?>
<h1>Ranking:</h1>
  <ol>
  <?php foreach ($arr as $nome => $pontos):?>
  <li><?=$nome ?> => <?=$pontos?> pontos</li>
  <?php endforeach;?>
</ol>
