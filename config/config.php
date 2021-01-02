<?php 

$autor = "Kevin Andrés Orrego Martínez";

$appName = "Kevin Andrés Orrego Martínez";

$email = "kevao.dev@gmail.com";

$date = date("Y-m-d");

$mes = date('n');

if ($mes >= 2) {
    $n = date('Y');
    $ex = $n - 2019;
    $ag = $n - 2001;
}else{
    $nacimiento=2001;
    $n = date('Y');
    $ex = $n - 2019;
    $ag = $n - 2001 - 1;
}

$icoName = "favicon";

//$serve = "https://kevaosportafolio.000webhostapp.com/";
$serve = "http://localhost/proyectos/php/jaja/";

?>