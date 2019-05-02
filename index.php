<?php
include 'config.php';
include 'libs/Calcul.php';


$obj = new Calcul();
$first = 9;
$second = 4;
$dev_null = "";

$obj->setFirst($first);
$obj->setSecond($second);
$first_get = $obj->getFirst();
$second_get =  $obj->getSecond();
$plus = $obj->plus();
$minus = $obj->minus();
$mult = $obj->mult();
if ($obj->getSecond() == 0) {
    $dev_null = DEV_NULL;
} else {
    $dev = $obj->dev();
    $one_dev = $obj->oneDev();
    $percent = $obj->percent();
}

$rad = $obj->rad();


$obj->add(7);
$show1 = $obj->show();//7
$obj->pick(2);
$show2 = $obj->show();//5
$obj->add(5);
$show3 = $obj->show();//10
$obj->pick(3);
$show4 = $obj->show();//7
$obj->del();
$show5 = $obj->show();


include_once 'templates/index.php';
?>
