<?php 
require_once("./class.data.php");
class new_data extends data {
	public $name;
	private $data=[];
	function __construct($id,$name){
		parent::set_id($id);
		$this->name=$name;
	} 
	function get_id(){
		return parent::get_id();
	}
	function set_id($id2){
		parent::set_id($id2);
	}
	function get_info(){
		parent::get_info();
		// echo "name : ".$this->name."<br>";
		echo self::$count;
		$this->data[parent::get_info()]=$this->name;
		echo "<pre>";
		var_dump($this->data);
		echo "</pre>";

		return $this->data;
	}
}

	$data=new new_data(2541,"charn");
	$data1=new new_data(2542,"s");
	var_dump($data1->get_info());
?>