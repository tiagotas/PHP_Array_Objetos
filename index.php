<?php

//  i | value
// [0] new Gato("Nicolau");   -> 
// [1] new Gato("Cinzão");
// [2] new Gato("Binha");


include "Gato.php";

/*
$gato1 = new Gato("Nicolau");
$gato2 = new Gato("Cinzão");
$gato3 = new Gato("Binha");
*/

/*
$arr_gatos = array(
    new Gato("Nicolau"),
    new Gato("Cinzão"),
    new Gato("Binha")
);*/

$arr_gatos = array();

$arr_gatos[] = new Gato("Nicolau");
$arr_gatos[] = new Gato("Cinzão");
$arr_gatos[] = new Gato("Binha");


$arr_gatos_size = count($arr_gatos);


for($i=0; $i<$arr_gatos_size; $i++) {

    echo "O gato da posição " . $i . " é " . $arr_gatos[$i]->nome . "<br />";
}


echo "<hr />";


include "Cachorro.php";

// Declarando arrays do bd ficticio.
$faz_de_conta_que_vem_do_db = array("Rex", "Totó", "Milu");
$faz_de_conta_que_vem_do_db_size = sizeof($faz_de_conta_que_vem_do_db);

// arrary de objetos cachorro.
$arr_cachorros = array();

// preenchendo o array de objetos cachorro.
for($i=0; $i<$faz_de_conta_que_vem_do_db_size; $i++)
{
    $arr_cachorros[] = new Cachorro($faz_de_conta_que_vem_do_db[$i]); 
}

// mostrando o conteudo do array de objetos cachorro

$arr_cachorros_size = sizeof($arr_cachorros);

for($i=0; $i<$arr_cachorros_size; $i++) {

    echo "O cachorro da posição " . $i . " é " . $arr_cachorros[$i]->nome . "<br />";
}

























