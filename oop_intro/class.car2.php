<?php 
require_once("./class.car.php");
class car2  extends car{
	private static $next_id=1;
	public function __construct($name,$color,$model,$year){  // 2 _ _ => __
		parent::set_data($name,$color,$model,$year);
	}
	public function _add($name){
		parent::add_owner(self::$next_id,$name);
		self::next_id();
	}
	public static function next_id(){
		self::$next_id++;
	}
}
?>