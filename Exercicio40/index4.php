<?php



function market($arr=["leite", "queijo", "manteiga, ovo, arroz, feijão"]){
    $lista= implode(", ",$arr);
    echo "Você levou: $lista.";
}
market();


?>
