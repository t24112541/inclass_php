<?php 
require_once("./class.car.php");
require_once("./class.car2.php");
// $car1=new car();
$car2=new car2("honda","red","civic","2019");
// $car1->set_data("toyota","red","revo","2019");

// foreach ($car1->get_data_arr() as $key => $data) {
// 	echo $key." : ".$data."<br>";
// }
// echo "<p>".$car1->info();

// $car1->add_owner("2541","ola");
// $car1->add_owner("2542","ola2");

$car2->_add("charn");

$car2->get_data();
echo "<p>";

var_dump($car2->get_owner());
// var_dump($car1->_add());

?>