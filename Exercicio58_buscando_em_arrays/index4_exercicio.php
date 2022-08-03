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
<table border="3">
    <tr>
    <th>Nome</th>
    <th>Pontos</th>
  </tr>
  <?php foreach ($arr as $nome => $pontos):?>
<tr>
  <td><?=$nome;?></td>
  <td><?=$pontos;?></td>
</tr>

  <?php endforeach;?>
</table>
