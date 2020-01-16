<?php 
class car{
	private $car_name;
	private $car_color;
	private $car_model;
	private $car_b_year;
	private $datas=[];
	private $owner_car=[];

	public function set_data($name,$color,$model,$year){
		$this->car_name=$name;
		$this->car_color=$color;
		$this->car_model=$model;
		$this->car_b_year=$year;
	}
	public function get_data(){
		
		echo "<br>car_name : ".$this->car_name;
		echo "<br>car_color : ".$this->car_color;
		echo "<br>car_model : ".$this->car_model;
		echo "<br>car_b_year : ".$this->car_b_year;
	}
	public function get_data_arr(){
		$this->datas=[
			"car_name"=>$this->car_name,
			"car_color"=>$this->car_color,
			"car_model"=>$this->car_model,
			"car_b_year"=>$this->car_b_year
		];
		return $this->datas;
	}
	public function info(){
		$info="";
		foreach ($this->get_data_arr() as $key => $value) {
			$info.=$key." : ".$value."<br>";
		}
		return $info;
	}
	public function add_owner($id,$name){
		$this->owner_car[$id]=$name;
	}
	public function get_owner(){
		// var_dump($this->owner_car);
		return $this->owner_car;
	}
}
?>