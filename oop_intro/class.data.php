<?php 
class data {
	private $id;
	protected static $count;
	function set_id($id){
		$this->id=$id;
	}
	function get_id(){
		$this->id.=" OK";
		return $this->id;
	}
	function get_info(){
		// echo "id : ".$this->id."<br>";
		self::$count++;
		return $this->id;
	}
}
?>