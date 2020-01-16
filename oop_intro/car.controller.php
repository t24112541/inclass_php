<?php 
session_start();
class controller{
	protected static $car_id;
	protected static $owner_id;
	// private $car_owner;
	// private $car_brand;
	// private $car_color;
	// private $car_model;
	// private $car_year;
	private $datas=[];

	public function add_car($car_brand,$car_model,$car_color,$car_year){
		$this->sh_lenght();
		$_SESSION['car'][self::$car_id]=[
			"car_brand"=>$car_brand,
			"car_model"=>$car_model,
			"car_color"=>$car_color,
			"car_year"=>$car_year			
		];
	}
	public function add_owner($car_id,$car_owner){
		$this->sh_lenght_owner();
		$_SESSION['car_owner'][self::$owner_id]=[
			"car_owner"=>$car_owner,
			"car_id"=>$car_id
		];
		$_SESSION['car'][$car_id]["car_owner"]=$car_owner;
	}
	public function inc_car_id(){
		return self::$car_id++;
	}
	public function show_car(){
		if(isset($_SESSION['car'])){
			return $_SESSION['car'];
		}else{
			return $_SESSION['car'][self::$car_id]=[
			"car_brand"=>'',
			"car_model"=>'',
			"car_color"=>'',
			"car_year"=>''			
		];
		}
		
	}
	public function show_car_where($id){
		return $_SESSION['car'][$id];
	}
	public function show_owner_where($id){
		// echo "<pre>";
		// var_dump($_SESSION['car_owner']);
		// echo "</pre>";
		foreach ($_SESSION['car_owner'] as $key => $value) {
			if($value['car_id']==$id){
				$data[$key]=[
					"owner_id"=>$key,
					"car_owner"=>$value['car_owner'],
					"car_id"=>$value['car_id']				
				];
				// echo $key." : ".$value['car_owner']." ".$value['car_id']."<br>";
			}
			
		}
		return $data;
	}
	public function clear_sess(){
		session_destroy();
	}
	public function sh_lenght(){
		if(isset($_SESSION['car'])){
			self::$car_id=count($_SESSION['car'])+1;
		}else{
			self::$car_id=1;
		}
		// echo self::$car_id;
	}
	public function sh_lenght_owner(){
		if(isset($_SESSION['car_owner'])){
			self::$owner_id=count($_SESSION['car_owner'])+1;
		}else{
			self::$owner_id=1;
		}
	}
}


?>